<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\Setting;

class OrderController extends Controller
{
    public function generateWhatsAppOrder(): void
    {
        $input = $this->getJsonBody();

        $errors = [];

        // 1. Validar Nombre (Sin numeros)
        $customerName = trim($input['name'] ?? '');
        if (empty($customerName) || mb_strlen($customerName) < 3) {
            $errors['name'] = 'Por favor ingresa tu nombre completo (al menos 3 caracteres).';
        } elseif (preg_match('/\d/', $customerName)) {
            $errors['name'] = 'El nombre no puede contener numeros. Solo letras y espacios.';
        } elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s\.\-]+$/u', $customerName)) {
            $errors['name'] = 'El nombre solo debe contener letras y espacios.';
        }

        // 2. Validar Telefono (Sin letras)
        $customerPhone = trim($input['phone'] ?? '');
        $digitsOnly = preg_replace('/\D/', '', $customerPhone);
        if (empty($customerPhone) || strlen($digitsOnly) < 10) {
            $errors['phone'] = 'Por favor ingresa un numero de telefono valido con al menos 10 digitos (ej. 0412 1234567).';
        } elseif (preg_match('/[a-zA-Z]/', $customerPhone)) {
            $errors['phone'] = 'El telefono no debe contener letras. Solo numeros y formato telefonico.';
        }

        // 3. Validar Metodo de Entrega
        $deliveryMethod = trim($input['deliveryMethod'] ?? 'Delivery en Barquisimeto');
        $validDeliveryMethods = [
            'Delivery en Barquisimeto',
            'Retiro en Tienda Barquisimeto',
            'Envio Nacional (MRW/Zoom/Tealca)'
        ];
        if (!in_array($deliveryMethod, $validDeliveryMethods, true)) {
            $deliveryMethod = 'Delivery en Barquisimeto';
        }

        // 4. Validar Ciudad (Sin numeros)
        $customerCity = trim($input['city'] ?? '');
        if (empty($customerCity) || mb_strlen($customerCity) < 3) {
            $errors['city'] = 'Por favor indica la ciudad o estado de entrega (ej. Barquisimeto, Caracas).';
        } elseif (preg_match('/\d/', $customerCity)) {
            $errors['city'] = 'La ciudad o estado no debe contener numeros.';
        }

        // 5. Validar Direccion segun metodo de entrega
        $customerAddress = trim($input['address'] ?? '');
        if ($deliveryMethod !== 'Retiro en Tienda Barquisimeto') {
            if (empty($customerAddress) || mb_strlen($customerAddress) < 5) {
                $errors['address'] = 'Por favor indica la direccion completa de entrega o salon de belleza (al menos 5 caracteres).';
            }
        }

        // 6. Validar Metodo de Pago
        $paymentMethod = trim($input['paymentMethod'] ?? 'Pago Movil (Tasa Oficial)');
        $validPaymentMethods = [
            'Pago Movil (Tasa Oficial)',
            'Zelle',
            'Dolares en Efectivo (Contra entrega o en tienda)',
            'Transferencia Banesco o Mercantil',
            'Binance Pay (USDT)'
        ];
        if (!in_array($paymentMethod, $validPaymentMethods, true)) {
            $paymentMethod = 'Pago Movil (Tasa Oficial)';
        }

        // 7. Validar Items del Carrito
        $items = $input['items'] ?? [];
        if (!is_array($items) || empty($items)) {
            $errors['cart'] = 'El carrito de compras esta vacio. Selecciona al menos un producto para continuar.';
        }

        // 8. Tasa de cambio
        $rate = (float) ($input['rate'] ?? Setting::getExchangeRate());
        if ($rate <= 0) {
            $rate = Setting::getExchangeRate();
        }

        $notes = trim($input['notes'] ?? '');

        // Si hay errores de validacion, responder con HTTP 422
        if (!empty($errors)) {
            $this->json([
                'status' => 'error',
                'message' => 'Por favor revisa y corrige los campos del formulario.',
                'errors' => $errors
            ], 422);
        }

        // Calcular totales de forma segura
        $subtotalUsd = 0.0;
        $orderLines = [];

        foreach ($items as $item) {
            $product = Product::find($item['id'] ?? '');
            $qty = max(1, (int) ($item['quantity'] ?? 1));
            $price = $product ? (float)$product['priceUsd'] : (float)($item['priceUsd'] ?? 0);
            $name = $product ? $product['name'] : ($item['name'] ?? 'Producto');

            $lineTotal = $price * $qty;
            $subtotalUsd += $lineTotal;

            $orderLines[] = [
                'name' => $name,
                'qty' => $qty,
                'priceUsd' => $price,
                'totalUsd' => $lineTotal
            ];
        }

        $shippingInfo = Setting::getShippingInfo();
        $shippingCostUsd = 0.0;
        if (str_contains(mb_strtolower($deliveryMethod), 'delivery')) {
            $shippingCostUsd = $subtotalUsd >= $shippingInfo['free_shipping_threshold'] ? 0.0 : $shippingInfo['local_delivery_cost'];
        }

        $totalUsd = $subtotalUsd + $shippingCostUsd;
        $totalVes = $totalUsd * $rate;

        // Construir mensaje en forma de lista ordenada sin emojis
        $msg = "*HOLA RM NAILS BOUTIQUE, DESEO CONFIRMAR EL SIGUIENTE PEDIDO:*\n\n";
        $msg .= "*LISTA DE PRODUCTOS SELECCIONADOS:*\n";

        $counter = 1;
        foreach ($orderLines as $line) {
            $msg .= "{$counter}. *{$line['qty']}x* {$line['name']} ($" . number_format($line['priceUsd'], 2) . " c/u) = *$" . number_format($line['totalUsd'], 2) . "*\n";
            $counter++;
        }

        $msg .= "\n*RESUMEN DEL PEDIDO:*\n";
        $msg .= "- Subtotal: $" . number_format($subtotalUsd, 2) . " USD\n";
        $msg .= "- Costo de Envio/Delivery: $" . number_format($shippingCostUsd, 2) . " USD\n";
        $msg .= "- Total General: *$" . number_format($totalUsd, 2) . " USD* / *Bs. " . number_format($totalVes, 2, ',', '.') . "*\n";
        $msg .= "(Tasa calculada: Bs. " . number_format($rate, 2, ',', '.') . ")\n\n";

        $msg .= "*DATOS DE LA CLIENTA:*\n";
        $msg .= "- Nombre: {$customerName}\n";
        $msg .= "- Telefono: {$customerPhone}\n";
        $msg .= "- Ciudad: {$customerCity}\n";
        if (!empty($customerAddress)) {
            $msg .= "- Direccion / Salon: {$customerAddress}\n";
        }
        $msg .= "- Metodo de Entrega: {$deliveryMethod}\n";
        $msg .= "- Metodo de Pago: {$paymentMethod}\n";

        if (!empty($notes)) {
            $msg .= "- Notas o Consulta: {$notes}\n";
        }

        $msg .= "\nNota: Pedido generado desde la tienda web oficial RM Nails Boutique. Consultando disponibilidad.";

        $officialPhone = Setting::getWhatsApp();
        $whatsAppUrl = "https://wa.me/{$officialPhone}?text=" . rawurlencode($msg);

        $this->json([
            'status' => 'success',
            'message' => 'Orden validada exitosamente.',
            'data' => [
                'subtotalUsd' => $subtotalUsd,
                'shippingCostUsd' => $shippingCostUsd,
                'totalUsd' => $totalUsd,
                'totalVes' => $totalVes,
                'whatsAppUrl' => $whatsAppUrl
            ]
        ]);
    }
}

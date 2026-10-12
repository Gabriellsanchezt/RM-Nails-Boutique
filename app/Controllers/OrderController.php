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

        $customerName = trim($input['name'] ?? '');
        $customerPhone = trim($input['phone'] ?? '');
        $customerCity = trim($input['city'] ?? 'Barquisimeto');
        $customerAddress = trim($input['address'] ?? '');
        $deliveryMethod = trim($input['deliveryMethod'] ?? 'Delivery en Barquisimeto');
        $paymentMethod = trim($input['paymentMethod'] ?? 'Pago Movil');
        $notes = trim($input['notes'] ?? '');
        $items = $input['items'] ?? [];
        $rate = (float) ($input['rate'] ?? Setting::getExchangeRate());

        if (empty($customerName) || empty($customerPhone) || empty($items)) {
            $this->json([
                'status' => 'error',
                'message' => 'Por favor complete su nombre, telefono y al menos un producto en el pedido.'
            ], 422);
        }

        // Calcular totales en el backend
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

        // Construir mensaje en forma de lista clara para atencion al cliente sin emojis
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

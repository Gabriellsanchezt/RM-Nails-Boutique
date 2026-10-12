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
        $paymentMethod = trim($input['paymentMethod'] ?? 'Pago Móvil');
        $notes = trim($input['notes'] ?? '');
        $items = $input['items'] ?? [];
        $rate = (float) ($input['rate'] ?? Setting::getExchangeRate());

        if (empty($customerName) || empty($customerPhone) || empty($items)) {
            $this->json([
                'status' => 'error',
                'message' => 'Por favor complete su nombre, teléfono y al menos un producto en el pedido.'
            ], 422);
        }

        // Calculate totals on backend for safety
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

        // Construct high-converting WhatsApp message
        $msg = "✨ *¡HOLA RM NAILS BOUTIQUE! Deseo confirmar un nuevo pedido:* ✨\n\n";
        $msg .= "🛒 *DETALLE DE LA ORDEN:*\n";

        foreach ($orderLines as $line) {
            $msg .= "• *{$line['qty']}x* {$line['name']} ($" . number_format($line['priceUsd'], 2) . " c/u) = *$" . number_format($line['totalUsd'], 2) . "*\n";
        }

        $msg .= "\n💰 *TOTAL A PAGAR:*\n";
        $msg .= "👉 *Subtotal:* $" . number_format($subtotalUsd, 2) . " USD\n";
        $msg .= "👉 *Envío/Delivery:* $" . number_format($shippingCostUsd, 2) . " USD\n";
        $msg .= "🔥 *TOTAL GENERAL:* *$" . number_format($totalUsd, 2) . " USD* / *Bs. " . number_format($totalVes, 2, ',', '.') . "*\n";
        $msg .= "(Tasa calculada: Bs. " . number_format($rate, 2, ',', '.') . ")\n\n";

        $msg .= "👤 *DATOS DE LA CLIENTA:*\n";
        $msg .= "• *Nombre:* {$customerName}\n";
        $msg .= "• *Teléfono:* {$customerPhone}\n";
        $msg .= "• *Ciudad:* {$customerCity}\n";
        if (!empty($customerAddress)) {
            $msg .= "• *Dirección / Salón:* {$customerAddress}\n";
        }
        $msg .= "• *Método de Entrega:* {$deliveryMethod}\n";
        $msg .= "• *Forma de Pago:* {$paymentMethod}\n";

        if (!empty($notes)) {
            $msg .= "• *Notas Especiales:* {$notes}\n";
        }

        $msg .= "\n💅 _Generado desde la tienda web oficial RM Nails Boutique_";

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

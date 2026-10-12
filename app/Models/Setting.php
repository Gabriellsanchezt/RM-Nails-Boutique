<?php

namespace App\Models;

use App\Core\Config;

class Setting
{
    public static function getExchangeRate(): float
    {
        return (float) Config::get('default_exchange_rate', 46.50);
    }

    public static function getWhatsApp(): string
    {
        return (string) Config::get('official_whatsapp', '584120549526');
    }

    public static function getInstagram(): array
    {
        return [
            'handle' => (string) Config::get('instagram', 'rmnailsboutique'),
            'url' => (string) Config::get('instagram_url', 'https://www.instagram.com/rmnailsboutique/')
        ];
    }

    public static function getShippingInfo(): array
    {
        return [
            'free_shipping_threshold' => (float) Config::get('free_shipping_threshold_usd', 35.00),
            'local_delivery_cost' => (float) Config::get('local_delivery_cost_usd', 2.50),
            'location' => Config::get('location')
        ];
    }
}

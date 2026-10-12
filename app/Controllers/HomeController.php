<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\Setting;
use App\Core\Config;

class HomeController extends Controller
{
    public function index(): void
    {
        $products = Product::all();
        $categories = Product::getCategories();
        $exchangeRate = Setting::getExchangeRate();
        $whatsApp = Setting::getWhatsApp();
        $instagram = Setting::getInstagram();
        $shipping = Setting::getShippingInfo();
        $appName = Config::get('app_name');
        $slogan = Config::get('slogan');

        $this->render('home.index', [
            'appName' => $appName,
            'slogan' => $slogan,
            'products' => $products,
            'categories' => $categories,
            'exchangeRate' => $exchangeRate,
            'whatsApp' => $whatsApp,
            'instagram' => $instagram,
            'shipping' => $shipping
        ]);
    }
}

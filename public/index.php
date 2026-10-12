<?php

declare(strict_types=1);

/**
 * RM Nails Boutique - Front Controller
 * MVC Architecture with Composer & PHP 8
 */

// Autoload composer dependencies & PSR-4 classes
require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\OrderController;

// Initialize Router
$router = new Router();

// --- WEB ROUTES ---
$router->get('/', [HomeController::class, 'index']);

// --- REST API ROUTES ---
$router->get('/api/products', [ProductController::class, 'index']);
$router->get('/api/products/{id}', [ProductController::class, 'show']);
$router->post('/api/order/whatsapp', [OrderController::class, 'generateWhatsAppOrder']);

// Dispatch request
$router->dispatch();

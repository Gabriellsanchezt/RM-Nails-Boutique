<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): void
    {
        $category = $_GET['category'] ?? null;
        $query = $_GET['q'] ?? null;

        $products = Product::filter($category, $query);

        $this->json([
            'status' => 'success',
            'count' => count($products),
            'data' => $products
        ]);
    }

    public function show(string $id): void
    {
        $product = Product::find($id);

        if (!$product) {
            $this->json([
                'status' => 'error',
                'message' => 'Producto no encontrado'
            ], 404);
        }

        $this->json([
            'status' => 'success',
            'data' => $product
        ]);
    }
}

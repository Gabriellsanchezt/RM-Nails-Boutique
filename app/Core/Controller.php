<?php

namespace App\Core;

abstract class Controller
{
    protected function render(string $viewPath, array $data = [], ?string $layout = 'main'): void
    {
        View::render($viewPath, $data, $layout);
    }

    protected function json(mixed $data, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }

    protected function getJsonBody(): array
    {
        $input = file_get_contents('php://input');
        if (!$input) {
            return [];
        }
        $data = json_decode($input, true);
        return is_array($data) ? $data : [];
    }
}

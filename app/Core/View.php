<?php

namespace App\Core;

class View
{
    public static function render(string $viewPath, array $data = [], ?string $layout = 'main'): void
    {
        extract($data);

        // View file path
        $fullPath = dirname(__DIR__) . '/Views/' . str_replace('.', '/', $viewPath) . '.php';

        if (!file_exists($fullPath)) {
            throw new \RuntimeException("Vista no encontrada: {$fullPath}");
        }

        ob_start();
        require $fullPath;
        $content = ob_get_clean();

        if ($layout) {
            $layoutPath = dirname(__DIR__) . '/Views/layouts/' . $layout . '.php';
            if (file_exists($layoutPath)) {
                require $layoutPath;
                return;
            }
        }

        echo $content;
    }

    public static function component(string $componentPath, array $data = []): void
    {
        extract($data);
        $fullPath = dirname(__DIR__) . '/Views/' . str_replace('.', '/', $componentPath) . '.php';
        if (file_exists($fullPath)) {
            require $fullPath;
        }
    }
}

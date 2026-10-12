<?php

namespace App\Core;

class Config
{
    private static ?array $settings = null;

    public static function load(): void
    {
        if (self::$settings === null) {
            $configPath = dirname(__DIR__, 2) . '/config/app.php';
            self::$settings = file_exists($configPath) ? require $configPath : [];
        }
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        self::load();
        return self::$settings[$key] ?? $default;
    }

    public static function all(): array
    {
        self::load();
        return self::$settings;
    }
}

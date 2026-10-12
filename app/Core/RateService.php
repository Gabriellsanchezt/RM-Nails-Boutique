<?php

namespace App\Core;

class RateService
{
    private static string $cacheFile = '';
    private const API_URL = 'https://ve.dolarapi.com/v1/dolares/oficial';
    private const CACHE_TTL_SECONDS = 1800; // 30 minutos

    private static function getCacheFilePath(): string
    {
        if (empty(self::$cacheFile)) {
            self::$cacheFile = dirname(__DIR__, 2) . '/storage/cache/rate_cache.json';
        }
        return self::$cacheFile;
    }

    public static function getRate(): array
    {
        $cachePath = self::getCacheFilePath();
        $fallbackRate = (float) Config::get('default_exchange_rate', 46.50);

        // 1. Intentar leer cache si es reciente
        if (file_exists($cachePath)) {
            $cachedContent = @file_get_contents($cachePath);
            if ($cachedContent) {
                $cachedData = json_decode($cachedContent, true);
                if (is_array($cachedData) && !empty($cachedData['rate'])) {
                    $cacheAge = time() - ($cachedData['timestamp'] ?? 0);
                    if ($cacheAge < self::CACHE_TTL_SECONDS) {
                        return [
                            'rate' => (float) $cachedData['rate'],
                            'source' => $cachedData['source'] ?? 'BCV Oficial',
                            'updated_at' => $cachedData['updated_at'] ?? date('Y-m-d H:i:s'),
                            'frozen' => false,
                            'cached' => true
                        ];
                    }
                }
            }
        }

        // 2. Intentar consultar API externa con timeout corto
        $freshRate = self::fetchFromApi();

        if ($freshRate !== null && $freshRate > 0) {
            $payload = [
                'rate' => $freshRate,
                'source' => 'BCV Oficial (DolarAPI)',
                'updated_at' => date('Y-m-d H:i:s'),
                'timestamp' => time()
            ];

            // Guardar en cache para congelar la tasa si luego falla la conexion
            $dir = dirname($cachePath);
            if (!is_dir($dir)) {
                @mkdir($dir, 0777, true);
            }
            @file_put_contents($cachePath, json_encode($payload, JSON_PRETTY_PRINT));

            return [
                'rate' => $freshRate,
                'source' => 'BCV Oficial (DolarAPI)',
                'updated_at' => $payload['updated_at'],
                'frozen' => false,
                'cached' => false
            ];
        }

        // 3. Si fallo la conexion, congelar en la ultima tasa guardada
        if (file_exists($cachePath)) {
            $cachedContent = @file_get_contents($cachePath);
            if ($cachedContent) {
                $cachedData = json_decode($cachedContent, true);
                if (is_array($cachedData) && !empty($cachedData['rate'])) {
                    return [
                        'rate' => (float) $cachedData['rate'],
                        'source' => $cachedData['source'] ?? 'BCV Oficial (Congelada)',
                        'updated_at' => $cachedData['updated_at'] ?? 'Ultima tasa disponible',
                        'frozen' => true,
                        'cached' => true
                    ];
                }
            }
        }

        // 4. Si nunca hubo conexion previa, usar la tasa de contingencia del config
        return [
            'rate' => $fallbackRate,
            'source' => 'Tasa de contingencia fija',
            'updated_at' => date('Y-m-d H:i:s'),
            'frozen' => true,
            'cached' => false
        ];
    }

    private static function fetchFromApi(): ?float
    {
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'timeout' => 3,
                'ignore_errors' => true,
                'header' => "Accept: application/json\r\nUser-Agent: RMNailsBoutique/1.0\r\n"
            ],
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false
            ]
        ]);

        $response = @file_get_contents(self::API_URL, false, $context);
        if (!$response) {
            return null;
        }

        $data = json_decode($response, true);
        if (!is_array($data)) {
            return null;
        }

        if (isset($data['promedio']) && is_numeric($data['promedio'])) {
            return (float) $data['promedio'];
        }

        return null;
    }
}

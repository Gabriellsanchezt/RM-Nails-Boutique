<?php

namespace App\Models;

use App\Core\Config;

class Product
{
    private static array $catalog = [
        [
            'id' => 'rm-01',
            'name' => 'Esmaltes Gel M&Y Collection (Gama 6 Tonos)',
            'category' => 'unas',
            'categoryName' => 'Uñas / Manicura',
            'priceUsd' => 14.50,
            'badge' => 'MÁS VENDIDO',
            'badgeType' => 'badge-gold',
            'rating' => 4.9,
            'reviews' => 84,
            'image' => 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&w=700&q=80',
            'description' => 'Colección de esmaltes semipermanentes de alta pigmentación, brillo espejo y duración de más de 21 días sin desprendimiento.',
            'features' => ['Curado UV/LED en 60s', 'Fórmula libre de 9 tóxicos', 'Brocha plana de precisión', 'Tonos nudes y vibrantes de temporada'],
            'stock' => 28
        ],
        [
            'id' => 'rm-02',
            'name' => 'Lámpara Profesional UV/LED Sun X5 Max 120W',
            'category' => 'unas',
            'categoryName' => 'Uñas / Manicura',
            'priceUsd' => 22.00,
            'badge' => 'INDISPENSABLE',
            'badgeType' => 'badge-pink',
            'rating' => 5.0,
            'reviews' => 112,
            'image' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=700&q=80',
            'description' => 'Lámpara de secado rápido con sensor inteligente, temporizador 10s/30s/60s/99s modo bajo calor para evitar molestias.',
            'features' => ['Potencia real de 120 Watts', '45 diodos LED estratégicamente distribuidos', 'Base removible para pedicura', 'Display digital LED'],
            'stock' => 14
        ],
        [
            'id' => 'rm-03',
            'name' => 'Serum & Kit Laminado de Cejas Iconsign Pro',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestañas',
            'priceUsd' => 18.00,
            'badge' => 'TOP BROWS',
            'badgeType' => 'badge-gold',
            'rating' => 4.8,
            'reviews' => 67,
            'image' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=700&q=80',
            'description' => 'Kit profesional completo para laminado y direccionamiento de cejas rebeldes. Rinde para más de 15 aplicaciones en cabina.',
            'features' => ['Efecto cejas orgánicas por 6 a 8 semanas', 'Lociones con colágeno nutritivo', 'Incluye herramientas de peinado y almohadillas', 'Resultados naturales e indoloros'],
            'stock' => 19
        ],
        [
            'id' => 'rm-04',
            'name' => 'Pestañas Nagaraku Mix Volumen Ruso (0.07 C/D)',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestañas',
            'priceUsd' => 7.50,
            'badge' => 'FAVORITO LASHISTAS',
            'badgeType' => 'badge-trend',
            'rating' => 4.9,
            'reviews' => 95,
            'image' => 'https://images.unsplash.com/photo-1583001809873-a128495da465?auto=format&fit=crop&w=700&q=80',
            'description' => 'Blíster de extensiones de pestañas de fibra de visón sintético de alta gama. Suaves, ligeras y con curvatura indeformable.',
            'features' => ['Mix de longitudes (7mm a 15mm)', 'Color negro mate profundo sin reflejos plásticos', 'Fácil despegue de la tira adhesiva', 'Ideales para abanicos de volumen'],
            'stock' => 45
        ],
        [
            'id' => 'rm-05',
            'name' => 'Aceite Nutritivo para Cutículas Gold 24k (30ml)',
            'category' => 'cuidado-herramientas',
            'categoryName' => 'Cuidado & Herramientas',
            'priceUsd' => 6.00,
            'badge' => 'AROMATERAPIA',
            'badgeType' => 'badge-pink',
            'rating' => 4.9,
            'reviews' => 53,
            'image' => 'https://images.unsplash.com/photo-1608248597359-50953a393fb6?auto=format&fit=crop&w=700&q=80',
            'description' => 'Elixir regenerador con micro-partículas doradas, aceite de almendras dulces y vitamina E. El toque final de lujo para tus clientas.',
            'features' => ['Hidratación profunda sin sensación grasosa', 'Aroma irresistible a rosas y vainilla', 'Gotero higiénico dosificador', 'Previene padrastros y resequedad'],
            'stock' => 36
        ],
        [
            'id' => 'rm-06',
            'name' => 'Pincel Kolinsky #8 Profesional para Acrílico',
            'category' => 'unas',
            'categoryName' => 'Uñas / Manicura',
            'priceUsd' => 19.50,
            'badge' => 'CALIDAD PREMIUM',
            'badgeType' => 'badge-gold',
            'rating' => 5.0,
            'reviews' => 42,
            'image' => 'https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=700&q=80',
            'description' => 'Pelo 100% Kolinsky puro con punta ovalada perfecta. Mango de metal oro rosa ergonómico y balanceado para el control de la perla.',
            'features' => ['Cerdas compactas de alta retención de monómero', 'Resistente a la acetona pura', 'Tapa protectora metálica incluida', 'Calidad de nivel competencia'],
            'stock' => 11
        ],
        [
            'id' => 'rm-07',
            'name' => 'Limas Profesionales Spongee 100/180 (Pack x10)',
            'category' => 'unas',
            'categoryName' => 'Uñas / Manicura',
            'priceUsd' => 8.00,
            'badge' => 'PACK AHORRO',
            'badgeType' => 'badge-trend',
            'rating' => 4.8,
            'reviews' => 61,
            'image' => 'https://images.unsplash.com/photo-1599305090598-fe179d501227?auto=format&fit=crop&w=700&q=80',
            'description' => 'Limas pulidoras acolchadas de doble grano. Suavizan la superficie de la uña artificial antes de esmaltar o sellar el brillo.',
            'features' => ['Grano 100/180 de larga duración', 'Espuma interior de memoria que no corta la cutícula', 'Lavables y desinfectables', 'Empaque sellado de 10 unidades'],
            'stock' => 50
        ],
        [
            'id' => 'rm-08',
            'name' => 'Pegamento de Pestañas Lady Black Ultra (5ml)',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestañas',
            'priceUsd' => 16.50,
            'badge' => 'SECADO RÁPIDO',
            'badgeType' => 'badge-pink',
            'rating' => 4.9,
            'reviews' => 78,
            'image' => 'https://images.unsplash.com/photo-1526045612212-70caf35c14df?auto=format&fit=crop&w=700&q=80',
            'description' => 'Adhesivo médico de grado profesional para extensiones. Secado en 1 a 2 segundos con retención insuperable de 5 a 7 semanas.',
            'features' => ['Bajo nivel de vapores hipoalergénico', 'Color negro carbón para acabado continuo', 'Fórmula de alta viscosidad y elasticidad', 'Bolsa térmica con gel de sílice'],
            'stock' => 22
        ],
        [
            'id' => 'rm-09',
            'name' => 'Kit de Inicio Manicurista Pro (Combo Mesa Completa)',
            'category' => 'combos',
            'categoryName' => 'Kits & Promos',
            'priceUsd' => 49.99,
            'badge' => 'SUPER COMBO',
            'badgeType' => 'badge-gold',
            'rating' => 5.0,
            'reviews' => 39,
            'image' => 'https://images.unsplash.com/photo-1634942537034-2531766767d1?auto=format&fit=crop&w=700&q=80',
            'description' => 'El combo ideal para iniciar tu negocio o salón. Incluye lámpara Sun X5, 6 geles, top coat, base coat, limas, wipes y aceite cutícula.',
            'features' => ['Ahorras más del 25% respecto a compra individual', 'Incluye guía rápida de aplicación de semipermanente', 'Caja de presentación boutique RM', 'Asesoría directa para dudas de uso'],
            'stock' => 8
        ],
        [
            'id' => 'rm-10',
            'name' => 'Kit de Fresas/Brocas Rusas de Diamante (7 piezas)',
            'category' => 'cuidado-herramientas',
            'categoryName' => 'Cuidado & Herramientas',
            'priceUsd' => 12.00,
            'badge' => 'MANICURA RUSA',
            'badgeType' => 'badge-trend',
            'rating' => 4.9,
            'reviews' => 44,
            'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=700&q=80',
            'description' => 'Set de fresas de precisión diamantadas para limpieza profunda de cutícula, remoción de piel seca y preparación perfecta de la placa ungueal.',
            'features' => ['Vástago estándar de 3/32" compatible con todos los drills', 'Resistentes al autoclave y calor seco', 'Brocas llama, esfera, cono y cilindro', 'Estuche acrílico organizador'],
            'stock' => 25
        ],
        [
            'id' => 'rm-11',
            'name' => 'Pinza Curva de Precisión para Volumen Ruso Gold',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestañas',
            'priceUsd' => 9.50,
            'badge' => 'ORO ROSA',
            'badgeType' => 'badge-gold',
            'rating' => 4.8,
            'reviews' => 31,
            'image' => 'https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=700&q=80',
            'description' => 'Pinza de acero inoxidable con calibración manual y agarre suave para armar abanicos perfectos sin cansar la mano del lashista.',
            'features' => ['Cierre 100% hermético de punta a punta', 'Acabado en oro rosado de titanio anti-óxido', 'Puntas afiladas a mano', 'Peso ultraligero de 17 gramos'],
            'stock' => 18
        ],
        [
            'id' => 'rm-12',
            'name' => 'Extractor Colector de Polvo 80W para Uñas',
            'category' => 'cuidado-herramientas',
            'categoryName' => 'Cuidado & Herramientas',
            'priceUsd' => 34.00,
            'badge' => 'SALUD & HIGIENE',
            'badgeType' => 'badge-pink',
            'rating' => 4.9,
            'reviews' => 29,
            'image' => 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=700&q=80',
            'description' => 'Potente extractor con filtro HEPA reutilizable. Protege tus pulmones y mantiene tu mesa de trabajo impecable libre de polvillo de acrílico.',
            'features' => ['Motor silencioso de alta succión 80W', 'Filtro extraíble de fácil limpieza', 'Diseño ergonómico con almohadilla de descanso para la clienta', 'Control de potencia progresivo'],
            'stock' => 9
        ]
    ];

    public static function all(): array
    {
        return self::$catalog;
    }

    public static function find(string $id): ?array
    {
        foreach (self::$catalog as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }

    public static function filter(?string $category = null, ?string $query = null): array
    {
        return array_values(array_filter(self::$catalog, function ($item) use ($category, $query) {
            $catMatch = true;
            if ($category && $category !== 'all') {
                $catMatch = ($item['category'] === $category);
            }

            $searchMatch = true;
            if ($query) {
                $q = mb_strtolower(trim($query));
                $name = mb_strtolower($item['name']);
                $desc = mb_strtolower($item['description']);
                $catName = mb_strtolower($item['categoryName']);
                $searchMatch = str_contains($name, $q) || str_contains($desc, $q) || str_contains($catName, $q);
            }

            return $catMatch && $searchMatch;
        }));
    }

    public static function getCategories(): array
    {
        return [
            ['id' => 'all', 'name' => 'Todos los Insumos', 'icon' => '✨'],
            ['id' => 'unas', 'name' => 'Uñas / Manicura', 'icon' => '💅'],
            ['id' => 'cejas-pestanas', 'name' => 'Cejas & Pestañas', 'icon' => '👁️'],
            ['id' => 'cuidado-herramientas', 'name' => 'Cuidado & Herramientas', 'icon' => '🌸'],
            ['id' => 'combos', 'name' => 'Kits & Promociones', 'icon' => '🎁']
        ];
    }
}

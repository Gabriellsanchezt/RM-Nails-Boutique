<?php

namespace App\Models;

class Product
{
    private static array $catalog = [
        [
            'id' => 'rm-01',
            'name' => 'Esmaltes Gel M&Y Collection (Gama 6 Tonos)',
            'category' => 'unas',
            'categoryName' => 'Unas / Manicura',
            'priceUsd' => 14.50,
            'badge' => 'MAS VENDIDO',
            'badgeType' => 'badge-gold',
            'rating' => 4.9,
            'reviews' => 84,
            'image' => 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&w=700&q=80',
            'description' => 'Coleccion de esmaltes semipermanentes de alta pigmentacion, brillo espejo y duracion prolongada sin desprendimiento.',
            'features' => ['Curado UV/LED en 60s', 'Formula libre de toxicos', 'Brocha plana de precision', 'Tonos nudes y vibrantes de temporada']
        ],
        [
            'id' => 'rm-02',
            'name' => 'Lampara Profesional UV/LED Sun X5 Max 120W',
            'category' => 'unas',
            'categoryName' => 'Unas / Manicura',
            'priceUsd' => 22.00,
            'badge' => 'INDISPENSABLE',
            'badgeType' => 'badge-pink',
            'rating' => 5.0,
            'reviews' => 112,
            'image' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=700&q=80',
            'description' => 'Lampara de secado rapido con sensor inteligente, temporizador digital y modo bajo calor para evitar molestias.',
            'features' => ['Potencia de 120 Watts', '45 diodos LED estrategicamente distribuidos', 'Base removible para pedicura', 'Display digital LED']
        ],
        [
            'id' => 'rm-03',
            'name' => 'Serum & Laminado de Cejas Iconsign Pro',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestanas',
            'priceUsd' => 18.00,
            'badge' => 'TOP BROWS',
            'badgeType' => 'badge-gold',
            'rating' => 4.8,
            'reviews' => 67,
            'image' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=700&q=80',
            'description' => 'Tratamiento profesional para direccionamiento y nutricion de cejas rebeldes en cabina.',
            'features' => ['Efecto cejas organicas de larga duracion', 'Lociones con colageno nutritivo', 'Incluye herramientas de peinado y almohadillas', 'Resultados definidos']
        ],
        [
            'id' => 'rm-04',
            'name' => 'Pestanas Nagaraku Mix Volumen Ruso (0.07 C/D)',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestanas',
            'priceUsd' => 7.50,
            'badge' => 'LASH ARTIST',
            'badgeType' => 'badge-trend',
            'rating' => 4.9,
            'reviews' => 95,
            'image' => 'https://images.unsplash.com/photo-1583001809873-a128495da465?auto=format&fit=crop&w=700&q=80',
            'description' => 'Blister de extensiones de pestanas de fibra suave de alta gama. Ligeras y con curvatura estable.',
            'features' => ['Mix de longitudes (7mm a 15mm)', 'Color negro mate profundo sin reflejos plasticos', 'Facil despegue de la tira adhesiva', 'Ideales para abanicos de volumen']
        ],
        [
            'id' => 'rm-05',
            'name' => 'Aceite Nutritivo para Cuticulas Gold 24k (30ml)',
            'category' => 'cuidado-herramientas',
            'categoryName' => 'Cuidado & Herramientas',
            'priceUsd' => 6.00,
            'badge' => 'AROMATERAPIA',
            'badgeType' => 'badge-pink',
            'rating' => 4.9,
            'reviews' => 53,
            'image' => 'https://images.unsplash.com/photo-1608248597359-50953a393fb6?auto=format&fit=crop&w=700&q=80',
            'description' => 'Elixir regenerador con micro-particulas doradas, aceite de almendras dulces y vitamina E.',
            'features' => ['Hidratacion profunda sin sensacion grasa', 'Aroma floral suave', 'Gotero higienico dosificador', 'Previene resequedad']
        ],
        [
            'id' => 'rm-06',
            'name' => 'Pincel Kolinsky #8 Profesional para Acrilico',
            'category' => 'unas',
            'categoryName' => 'Unas / Manicura',
            'priceUsd' => 19.50,
            'badge' => 'CALIDAD PREMIUM',
            'badgeType' => 'badge-gold',
            'rating' => 5.0,
            'reviews' => 42,
            'image' => 'https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=700&q=80',
            'description' => 'Pelo 100% Kolinsky con punta ovalada calibrada. Mango de metal oro rosa balanceado para control de la perla.',
            'features' => ['Cerdas compactas de alta retencion de monomero', 'Resistente a la acetona pura', 'Tapa protectora metalica incluida', 'Nivel profesional']
        ],
        [
            'id' => 'rm-07',
            'name' => 'Limas Profesionales Spongee 100/180 (Pack x10)',
            'category' => 'unas',
            'categoryName' => 'Unas / Manicura',
            'priceUsd' => 8.00,
            'badge' => 'PACK PROFESIONAL',
            'badgeType' => 'badge-trend',
            'rating' => 4.8,
            'reviews' => 61,
            'image' => 'https://images.unsplash.com/photo-1599305090598-fe179d501227?auto=format&fit=crop&w=700&q=80',
            'description' => 'Limas pulidoras acolchadas de doble grano. Suavizan la superficie de la una antes de esmaltar o sellar brillo.',
            'features' => ['Grano 100/180 de durabilidad extendida', 'Espuma interior flexible', 'Desinfectables', 'Empaque de 10 unidades']
        ],
        [
            'id' => 'rm-08',
            'name' => 'Pegamento de Pestanas Lady Black Ultra (5ml)',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestanas',
            'priceUsd' => 16.50,
            'badge' => 'SECADO RAPIDO',
            'badgeType' => 'badge-pink',
            'rating' => 4.9,
            'reviews' => 78,
            'image' => 'https://images.unsplash.com/photo-1526045612212-70caf35c14df?auto=format&fit=crop&w=700&q=80',
            'description' => 'Adhesivo de grado profesional para extensiones de pestanas con tiempo de fijacion de 1 a 2 segundos.',
            'features' => ['Bajo nivel de vapores', 'Color negro carbon para acabado limpio', 'Formula de alta retencion', 'Bolsa termica sellada']
        ],
        [
            'id' => 'rm-10',
            'name' => 'Set de Fresas de Diamante para Manicura Rusa (7 piezas)',
            'category' => 'cuidado-herramientas',
            'categoryName' => 'Cuidado & Herramientas',
            'priceUsd' => 12.00,
            'badge' => 'MANICURA RUSA',
            'badgeType' => 'badge-trend',
            'rating' => 4.9,
            'reviews' => 44,
            'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=700&q=80',
            'description' => 'Brocas de precision diamantadas para limpieza de cuticula y preparacion de la placa ungueal.',
            'features' => ['Vastago estandar de 3/32 compatible con drills', 'Esterilizables en calor seco o autoclave', 'Formas llama, esfera, cono y cilindro', 'Estuche organizador']
        ],
        [
            'id' => 'rm-11',
            'name' => 'Pinza Curva de Precision para Volumen Ruso Gold',
            'category' => 'cejas-pestanas',
            'categoryName' => 'Cejas & Pestanas',
            'priceUsd' => 9.50,
            'badge' => 'ORO ROSA',
            'badgeType' => 'badge-gold',
            'rating' => 4.8,
            'reviews' => 31,
            'image' => 'https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=700&q=80',
            'description' => 'Pinza de acero inoxidable con calibracion manual para armado de abanicos precisos.',
            'features' => ['Cierre hermetico de punta a punta', 'Acabado en titanio oro rosa', 'Puntas afiladas a mano', 'Peso ultraligero']
        ],
        [
            'id' => 'rm-12',
            'name' => 'Extractor Colector de Polvo 80W para Mesa de Unas',
            'category' => 'cuidado-herramientas',
            'categoryName' => 'Cuidado & Herramientas',
            'priceUsd' => 34.00,
            'badge' => 'HIGIENE Y SALUD',
            'badgeType' => 'badge-pink',
            'rating' => 4.9,
            'reviews' => 29,
            'image' => 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=700&q=80',
            'description' => 'Extractor con filtro HEPA reutilizable para mantener el area de trabajo libre de polvillo.',
            'features' => ['Motor de alta succion de 80W', 'Filtro lavable extraible', 'Diseno ergonomico para descanso de la mano', 'Control de potencia']
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
            ['id' => 'all', 'name' => 'Todos los Insumos'],
            ['id' => 'unas', 'name' => 'Unas / Manicura'],
            ['id' => 'cejas-pestanas', 'name' => 'Cejas & Pestanas'],
            ['id' => 'cuidado-herramientas', 'name' => 'Cuidado & Herramientas']
        ];
    }
}

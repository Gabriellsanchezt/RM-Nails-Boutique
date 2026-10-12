<?php
// Layout components
\App\Core\View::component('layouts/header', [
    'appName' => $appName,
    'slogan' => $slogan,
    'categories' => $categories,
    'exchangeRate' => $exchangeRate,
    'instagram' => $instagram,
    'whatsApp' => $whatsApp
]);
?>

<main class="flex-grow">
    <?php \App\Core\View::component('home/hero', [
        'appName' => $appName,
        'slogan' => $slogan
    ]); ?>

    <?php \App\Core\View::component('home/catalog', [
        'products' => $products,
        'categories' => $categories,
        'exchangeRate' => $exchangeRate
    ]); ?>

    <?php \App\Core\View::component('home/features', [
        'shipping' => $shipping
    ]); ?>

    <?php \App\Core\View::component('home/reviews'); ?>

    <?php \App\Core\View::component('home/instagram', [
        'instagram' => $instagram
    ]); ?>
</main>

<?php
\App\Core\View::component('layouts/footer', [
    'appName' => $appName,
    'slogan' => $slogan,
    'whatsApp' => $whatsApp,
    'instagram' => $instagram
]);
?>

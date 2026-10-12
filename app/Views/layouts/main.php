<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?> | <?= htmlspecialchars($slogan ?? 'La boutique de las unas') ?></title>
  <meta name="description" content="Insumos profesionales para manicuristas, brows artists y lashistas en Barquisimeto y toda Venezuela. Esmaltes gel, pestanas pelo a pelo, lamparas y mas. Envios nacionales y delivery rapido." />
  
  <!-- Favicon con Logo Oficial -->
  <link rel="icon" type="image/jpeg" href="<?= \App\Core\View::asset('assets/images/logo.jpg') ?>" />

  <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            boutique: {
              pink: '#E57399',
              'pink-dark': '#C84B75',
              'pink-light': '#FDE8EF',
              'pink-soft': '#FFF1F5',
              gold: '#D4AF37',
              'gold-light': '#F6E6B4',
              'gold-dark': '#B08D24',
              dark: '#1F191E',
              gray: '#6B6168',
              cream: '#FCF8F9'
            }
          },
          fontFamily: {
            serif: ['"Playfair Display"', 'Georgia', 'serif'],
            sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif']
          }
        }
      }
    }
  </script>

  <!-- Custom Boutique Theme CSS -->
  <link rel="stylesheet" href="<?= \App\Core\View::asset('assets/css/styles.css') ?>" />
</head>
<body class="bg-[#FCF8F9] text-gray-800 antialiased font-sans flex flex-col min-h-screen">

  <?= $content ?>

  <!-- Modals & Drawers -->
  <?php \App\Core\View::component('modals/cart_drawer', $data ?? []); ?>
  <?php \App\Core\View::component('modals/checkout', $data ?? []); ?>
  <?php \App\Core\View::component('modals/quickview', $data ?? []); ?>
  <?php \App\Core\View::component('modals/wishlist', $data ?? []); ?>
  <?php \App\Core\View::component('modals/rate', $data ?? []); ?>

  <!-- Floating WhatsApp Quick Button con Icono SVG -->
  <div class="fixed bottom-6 right-6 z-40 flex items-center gap-2">
    <div class="hidden sm:flex bg-white text-gray-800 text-[11px] font-bold px-3 py-1.5 rounded-full shadow-lg border border-emerald-200 items-center gap-1.5 animate-bounce">
      <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
      <span>Atencion directa en linea</span>
    </div>
    <a 
      href="https://wa.me/<?= htmlspecialchars($whatsApp ?? '584120549526') ?>?text=<?= rawurlencode('Hola RM Nails Boutique, deseo consultar disponibilidad sobre insumos profesionales para mi estudio.') ?>" 
      target="_blank" 
      rel="noopener noreferrer"
      class="whatsapp-pulse w-14 h-14 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full flex items-center justify-center shadow-2xl transition-all transform hover:scale-110 active:scale-95"
      aria-label="Abrir WhatsApp oficial"
      title="Chat directo con asesora RM Nails Boutique"
    >
      <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
      </svg>
    </a>
  </div>

  <!-- Toast Notification Container -->
  <div id="toast-container"></div>

  <!-- App Client-Side Logic -->
  <script src="<?= \App\Core\View::asset('assets/js/app.js') ?>"></script>
</body>
</html>

<!-- Top Notification Bar -->
<div class="bg-gradient-to-r from-[#D0537B] via-[#E57399] to-[#D4AF37] text-white text-xs py-2 px-4 shadow-sm z-50">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2">
    <!-- Announcement Message with SVG icons -->
    <div class="flex items-center gap-2 overflow-hidden text-center sm:text-left font-medium">
      <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1v2m0-2h4l3 3v3h-2m-4-1a2 2 0 11-4 0 2 2 0 014 0zm8 0a2 2 0 11-4 0 2 2 0 014 0z"></path>
      </svg>
      <span class="tracking-wide">
        <strong>Envios a nivel nacional en Venezuela</strong> | Servicio de Delivery Express en <strong>Barquisimeto</strong>
      </span>
    </div>

    <!-- Live Tasa Indicator (Automatic API with Frozen fallback) -->
    <div class="flex items-center gap-4 text-[11px] font-semibold">
      <button 
        id="currency-toggle-btn"
        onclick="toggleCurrency()"
        class="flex items-center gap-1.5 bg-black/15 hover:bg-black/25 px-2.5 py-1 rounded-full transition-all border border-white/20"
        title="Alternar moneda de visualizacion (USD / Bs)"
      >
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
        </svg>
        <span id="current-currency-label">USD ($)</span>
        <span class="opacity-60">|</span>
        <span id="current-rate-label" class="opacity-90">Tasa Oficial: Bs. <?= number_format($exchangeRate ?? 46.50, 2) ?></span>
      </button>

      <span id="rate-frozen-badge" class="hidden text-[10px] bg-amber-500/80 text-white px-2 py-0.5 rounded-full font-bold">
        Tasa Congelada
      </span>

      <!-- Instagram Direct Link -->
      <a 
        href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" 
        target="_blank" 
        rel="noopener noreferrer"
        class="hidden md:flex items-center gap-1 hover:text-pink-100 transition-colors"
      >
        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </svg>
        <span>@<?= htmlspecialchars($instagram['handle'] ?? 'rmnailsboutique') ?></span>
      </a>
    </div>
  </div>
</div>

<!-- Main Header -->
<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-pink-100 shadow-sm transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 sm:h-18 gap-3 sm:gap-4">
      
      <!-- Mobile Menu Toggle Button -->
      <button 
        onclick="toggleMobileMenu()" 
        class="lg:hidden p-2 rounded-xl text-gray-700 hover:text-pink-600 hover:bg-pink-50 transition-colors"
        aria-label="Abrir menu"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Official Logo with image from Instagram (Centrado y Proporcional) -->
      <a href="#inicio" class="flex items-center gap-2.5 sm:gap-3 group flex-shrink-0 my-auto">
        <div class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full p-0.5 bg-gradient-to-tr from-[#E57399] via-[#F29AB6] to-[#D4AF37] shadow-sm group-hover:scale-105 transition-transform flex-shrink-0 flex items-center justify-center">
          <div class="w-full h-full rounded-full bg-white overflow-hidden flex items-center justify-center">
            <img 
              src="<?= \App\Core\View::asset('assets/images/logo.jpg') ?>" 
              alt="RM Nails Boutique Logo Oficial" 
              class="w-full h-full object-cover object-center rounded-full transform group-hover:scale-110 transition-transform duration-300"
              onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
            />
            <div class="hidden w-full h-full bg-pink-50 rounded-full items-center justify-center">
              <span class="font-serif font-black text-sm text-[#E57399]">RM</span>
            </div>
          </div>
        </div>
        <div class="flex flex-col justify-center min-w-0">
          <span class="font-serif font-bold text-sm sm:text-base lg:text-lg text-gray-900 tracking-tight leading-tight group-hover:text-[#E57399] transition-colors truncate max-w-[130px] xs:max-w-[200px] sm:max-w-none">
            <?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?>
          </span>
          <span class="text-[8px] sm:text-[10px] font-semibold text-gray-400 tracking-widest uppercase truncate max-w-[130px] xs:max-w-[200px] sm:max-w-none">
            <?= htmlspecialchars($slogan ?? 'La boutique de las unas') ?>
          </span>
        </div>
      </a>

      <!-- Smart Search Bar -->
      <div class="hidden md:flex flex-1 max-w-md mx-4">
        <div class="relative w-full">
          <input 
            id="search-input"
            type="text" 
            placeholder="Buscar geles, pestanas, limas, aceites, lamparas..." 
            class="w-full bg-[#FCF8F9] border border-pink-200/80 rounded-full py-2.5 pl-11 pr-4 text-xs focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-100 transition-all placeholder-gray-400 shadow-inner"
          />
          <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
            <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
        </div>
      </div>

      <!-- Right Quick Actions -->
      <div class="flex items-center gap-1.5 sm:gap-3 flex-shrink-0">
        <!-- WhatsApp Fast Contact -->
        <button 
          onclick="openGeneralWhatsApp()"
          class="hidden sm:flex items-center gap-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 border border-emerald-200 px-3.5 py-2 rounded-full transition-all"
        >
          <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
          </svg>
          <span class="hidden xl:inline">Atencion WhatsApp</span>
        </button>

        <!-- Wishlist Button -->
        <button 
          onclick="openWishlistModal()"
          class="relative p-2 sm:p-2.5 rounded-full text-gray-600 hover:text-pink-600 hover:bg-pink-50 transition-colors"
          title="Ver favoritos"
        >
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
          <span class="wishlist-count-badge hidden absolute -top-1 -right-1 bg-pink-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-sm">
            0
          </span>
        </button>

        <!-- Cart Slide-Over Trigger Button -->
        <button 
          onclick="openCartDrawer()"
          class="relative flex items-center gap-1.5 sm:gap-2 bg-[#FFF1F5] hover:bg-[#FDE2EC] text-[#C84B75] border border-pink-200 px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-full font-semibold text-xs transition-all shadow-sm group"
          title="Ver carrito de compras"
        >
          <div class="relative">
            <svg class="w-5 h-5 text-[#E57399] group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <span class="cart-count-badge hidden absolute -top-2 -right-2 bg-[#D4AF37] text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow-sm">
              0
            </span>
          </div>
          <span class="hidden sm:inline">Carrito</span>
        </button>
      </div>
    </div>

    <!-- General Website Navigation Bar (Ayuda al cliente) -->
    <nav class="hidden lg:flex items-center justify-center border-t border-pink-100/70 py-3 gap-8 text-xs font-semibold text-gray-700">
      <a href="#inicio" class="flex items-center gap-2 hover:text-[#E57399] transition-colors py-1 px-3 rounded-full hover:bg-pink-50/80">
        <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        <span>Inicio</span>
      </a>
      <a href="#catalogo" class="flex items-center gap-2 hover:text-[#E57399] transition-colors py-1 px-3 rounded-full hover:bg-pink-50/80">
        <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
        </svg>
        <span>Catalogo de Insumos</span>
      </a>
      <a href="#envios" class="flex items-center gap-2 hover:text-[#E57399] transition-colors py-1 px-3 rounded-full hover:bg-pink-50/80">
        <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1v2m0-2h4l3 3v3h-2m-4-1a2 2 0 11-4 0 2 2 0 014 0zm8 0a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
        <span>Envios & Delivery</span>
      </a>
      <a href="#opiniones" class="flex items-center gap-2 hover:text-[#E57399] transition-colors py-1 px-3 rounded-full hover:bg-pink-50/80">
        <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
        </svg>
        <span>Opiniones de Clientas</span>
      </a>
      <a href="#contacto" class="flex items-center gap-2 hover:text-[#E57399] transition-colors py-1 px-3 rounded-full hover:bg-pink-50/80">
        <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <span>Contacto & Ubicacion</span>
      </a>
    </nav>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div 
  id="mobile-menu-backdrop" 
  onclick="toggleMobileMenu()" 
  class="drawer-backdrop fixed inset-0 bg-black/60 z-50 backdrop-blur-sm transition-opacity"
></div>

<aside 
  id="mobile-menu-drawer" 
  class="drawer-content drawer-left fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-white shadow-2xl z-50 flex flex-col justify-between"
>
  <!-- Drawer Header -->
  <div class="p-5 border-b border-pink-100 flex items-center justify-between bg-gradient-to-r from-pink-50 via-white to-white">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-full p-0.5 bg-gradient-to-tr from-[#E57399] via-[#F29AB6] to-[#D4AF37] shadow-sm flex-shrink-0">
        <img 
          src="<?= \App\Core\View::asset('assets/images/logo.jpg') ?>" 
          alt="RM Nails Boutique" 
          class="w-full h-full object-cover rounded-full"
        />
      </div>
      <div>
        <h4 class="font-serif font-bold text-sm text-gray-900"><?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?></h4>
        <p class="text-[10px] text-gray-400 uppercase tracking-wider"><?= htmlspecialchars($slogan ?? 'La boutique de las unas') ?></p>
      </div>
    </div>
    <button 
      onclick="toggleMobileMenu()" 
      class="text-gray-400 hover:text-gray-700 p-1.5 rounded-lg hover:bg-gray-100 transition-colors"
      aria-label="Cerrar menu"
    >
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>

  <!-- Drawer Links -->
  <div class="p-5 overflow-y-auto space-y-2 flex-1">
    <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400 block px-3 mb-2">Navegacion General</span>
    
    <a 
      href="#inicio" 
      onclick="toggleMobileMenu()" 
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:text-[#E57399] hover:bg-pink-50/70 transition-colors"
    >
      <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
      </svg>
      <span>Inicio</span>
    </a>

    <a 
      href="#catalogo" 
      onclick="toggleMobileMenu()" 
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:text-[#E57399] hover:bg-pink-50/70 transition-colors"
    >
      <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
      </svg>
      <span>Catalogo de Insumos</span>
    </a>

    <a 
      href="#envios" 
      onclick="toggleMobileMenu()" 
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:text-[#E57399] hover:bg-pink-50/70 transition-colors"
    >
      <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1v2m0-2h4l3 3v3h-2m-4-1a2 2 0 11-4 0 2 2 0 014 0zm8 0a2 2 0 11-4 0 2 2 0 014 0z"></path>
      </svg>
      <span>Envios & Delivery</span>
    </a>

    <a 
      href="#opiniones" 
      onclick="toggleMobileMenu()" 
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:text-[#E57399] hover:bg-pink-50/70 transition-colors"
    >
      <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
      </svg>
      <span>Opiniones de Clientas</span>
    </a>

    <a 
      href="#contacto" 
      onclick="toggleMobileMenu()" 
      class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:text-[#E57399] hover:bg-pink-50/70 transition-colors"
    >
      <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
      </svg>
      <span>Contacto & Ubicacion</span>
    </a>
  </div>

  <!-- Drawer Footer: Quick Buttons -->
  <div class="p-5 border-t border-pink-100 bg-[#FCF8F9] space-y-2">
    <button 
      onclick="toggleMobileMenu(); openGeneralWhatsApp();" 
      class="w-full flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2.5 px-4 rounded-xl text-xs transition-colors shadow-sm"
    >
      <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
      </svg>
      <span>Atencion WhatsApp</span>
    </button>
    <a 
      href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" 
      target="_blank" 
      rel="noopener noreferrer" 
      class="w-full flex items-center justify-center gap-2 bg-white border border-pink-200 text-gray-700 hover:text-pink-600 font-semibold py-2.5 px-4 rounded-xl text-xs transition-colors"
    >
      <svg class="w-4 h-4 fill-current text-pink-500" viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
      </svg>
      <span>@<?= htmlspecialchars($instagram['handle'] ?? 'rmnailsboutique') ?></span>
    </a>
  </div>
</aside>

<!-- Mobile Search Bar -->
<div class="md:hidden bg-white px-4 py-2.5 border-b border-pink-100">
  <div class="relative w-full">
    <input 
      id="mobile-search-input"
      type="text" 
      placeholder="Buscar insumos (geles, pestanas, lamparas...)" 
      class="w-full bg-[#FCF8F9] border border-pink-200 rounded-full py-2 pl-9 pr-4 text-xs focus:outline-none focus:border-pink-500 shadow-inner"
    />
    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-pink-400">
      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
    </div>
  </div>
</div>

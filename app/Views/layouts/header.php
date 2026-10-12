<!-- =========================================================================
     1. TOP NOTIFICATION BAR (Barra Superior Promocional)
     ========================================================================= -->
<div class="bg-gradient-to-r from-[#D0537B] via-[#E57399] to-[#D4AF37] text-white text-xs py-2 px-4 shadow-sm z-50">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2">
    <!-- Announcement Message -->
    <div class="flex items-center gap-2 overflow-hidden text-center sm:text-left font-medium">
      <span class="inline-block animate-pulse">🚚</span>
      <span class="tracking-wide">
        <strong>Envíos a nivel nacional en Venezuela 🇻🇪</strong> | Servicio de Delivery Express en <strong>Barquisimeto 🛵</strong>
      </span>
    </div>

    <!-- Action Toggles (Currency & Instagram Link) -->
    <div class="flex items-center gap-4 text-[11px] font-semibold">
      <!-- Live Tasa Indicator & Currency Switcher -->
      <button 
        id="currency-toggle-btn"
        onclick="toggleCurrency()"
        class="flex items-center gap-1.5 bg-black/15 hover:bg-black/25 px-2.5 py-1 rounded-full transition-all border border-white/20"
        title="Alternar moneda de visualización (USD / Bs)"
      >
        <span>💱</span>
        <span id="current-currency-label">USD ($)</span>
        <span class="opacity-60">|</span>
        <span id="current-rate-label" class="opacity-90">Tasa: Bs. <?= number_format($exchangeRate ?? 46.50, 2) ?></span>
      </button>

      <!-- Edit rate button -->
      <button onclick="openRateModal()" class="text-white/80 hover:text-white underline text-[10px]" title="Ajustar tasa referencial">
        Ajustar Tasa
      </button>

      <!-- Instagram Direct -->
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

<!-- =========================================================================
     2. HEADER & NAVEGACIÓN PRINCIPAL
     ========================================================================= -->
<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-pink-100 shadow-sm transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20 gap-4">
      
      <!-- Mobile Menu Toggle Button -->
      <button 
        onclick="toggleMobileMenu()" 
        class="lg:hidden p-2 rounded-xl text-gray-700 hover:text-pink-600 hover:bg-pink-50 transition-colors"
        aria-label="Abrir menú"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Brand Logo (Isotipo RM + Tipografía limpia chic) -->
      <a href="#inicio" class="flex items-center gap-3 group flex-shrink-0">
        <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-[#E57399] via-[#F29AB6] to-[#D4AF37] p-0.5 shadow-md group-hover:scale-105 transition-transform">
          <div class="w-full h-full bg-white rounded-[14px] flex items-center justify-center">
            <span class="font-serif font-black text-xl text-[#E57399] tracking-tighter">RM</span>
          </div>
        </div>
        <div class="flex flex-col">
          <span class="font-serif font-bold text-lg sm:text-xl text-gray-900 tracking-tight leading-none group-hover:text-[#E57399] transition-colors">
            <?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?>
          </span>
          <span class="text-[10px] sm:text-[11px] font-medium text-gray-400 tracking-wider uppercase mt-1">
            <?= htmlspecialchars($slogan ?? 'La boutique de las uñas') ?>
          </span>
        </div>
      </a>

      <!-- Smart Search Bar -->
      <div class="hidden md:flex flex-1 max-w-md mx-4">
        <div class="relative w-full">
          <input 
            id="search-input"
            type="text" 
            placeholder="Buscar geles, pestañas, limas, aceites, lámparas..." 
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
      <div class="flex items-center gap-2 sm:gap-3">
        <!-- WhatsApp Fast Contact -->
        <button 
          onclick="openGeneralWhatsApp()"
          class="hidden sm:flex items-center gap-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 border border-emerald-200 px-3.5 py-2 rounded-full transition-all"
        >
          <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
          </svg>
          <span class="hidden xl:inline">Asesoría Directa</span>
        </button>

        <!-- Wishlist Button -->
        <button 
          onclick="openWishlistModal()"
          class="relative p-2.5 rounded-full text-gray-600 hover:text-pink-600 hover:bg-pink-50 transition-colors"
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
          class="relative flex items-center gap-2 bg-[#FFF1F5] hover:bg-[#FDE2EC] text-[#C84B75] border border-pink-200 px-3.5 py-2 rounded-full font-semibold text-xs transition-all shadow-sm group"
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

    <!-- Categories Sub-Navigation Bar -->
    <nav class="hidden lg:flex items-center justify-center border-t border-pink-100/60 py-2.5 gap-8 text-xs font-semibold text-gray-600">
      <?php foreach ($categories as $cat): ?>
        <a 
          href="#catalogo" 
          onclick="setCategory('<?= htmlspecialchars($cat['id']) ?>')" 
          class="hover:text-pink-600 transition-colors flex items-center gap-1.5 <?= $cat['id'] === 'combos' ? 'text-pink-600 font-bold' : '' ?>"
        >
          <span><?= $cat['icon'] ?></span> <?= htmlspecialchars($cat['name']) ?>
        </a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>

<!-- Mobile Search Bar (under header for small devices) -->
<div class="md:hidden bg-white px-4 py-2.5 border-b border-pink-100">
  <div class="relative w-full">
    <input 
      type="text" 
      oninput="STATE.searchQuery = this.value; renderProducts();"
      placeholder="Buscar insumos (geles, pestañas, lámparas...)" 
      class="w-full bg-[#FCF8F9] border border-pink-200 rounded-full py-2 pl-9 pr-4 text-xs focus:outline-none focus:border-pink-500"
    />
    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-pink-400">
      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
    </div>
  </div>
</div>

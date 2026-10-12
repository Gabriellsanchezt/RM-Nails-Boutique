<!-- Catalogo de Productos Destacados -->
<section id="catalogo" class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
  
  <!-- Section Header -->
  <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
    <div>
      <span class="text-xs font-bold uppercase tracking-wider text-pink-600 block mb-1">
        Insumos Profesionales de Belleza
      </span>
      <h2 class="font-serif font-bold text-2xl sm:text-4xl text-gray-900">
        Catalogo de Productos
      </h2>
      <p id="product-count" class="text-xs text-gray-500 mt-1">
        <?= count($products ?? []) ?> insumos disponibles
      </p>
    </div>

    <!-- Actions: Ver Todo el Catalogo + Selector de Orden -->
    <div class="flex flex-wrap items-center gap-3">
      <!-- Boton de Mostrar Todo el Catalogo -->
      <button 
        onclick="resetFilters()"
        class="bg-pink-50 hover:bg-pink-100 text-pink-700 border border-pink-200 px-4 py-2 rounded-xl text-xs font-bold flex items-center gap-2 transition-all shadow-sm"
        title="Mostrar todos los productos sin filtros"
      >
        <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span>Mostrar Todo el Catalogo</span>
      </button>

      <div class="flex items-center gap-2">
        <label for="sort-select" class="text-xs font-semibold text-gray-500 whitespace-nowrap">Ordenar:</label>
        <select 
          id="sort-select"
          class="bg-white border border-pink-200 rounded-xl px-3 py-2 text-xs font-semibold text-gray-700 focus:outline-none focus:border-pink-500 shadow-sm"
        >
          <option value="featured">Destacados RM</option>
          <option value="price-asc">Precio: Menor a Mayor</option>
          <option value="price-desc">Precio: Mayor a Menor</option>
          <option value="rating">Mejor Calificados</option>
        </select>
      </div>
    </div>
  </div>

  <!-- Category Filter Pills (Sin kits, con iconos SVG limpios) -->
  <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 no-scrollbar">
    <button 
      data-category="all"
      class="cat-pill active px-4 py-2 rounded-full text-xs font-semibold border border-pink-200 bg-white text-gray-700 whitespace-nowrap transition-all flex items-center gap-1.5"
    >
      <svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
      </svg>
      <span>Todos</span>
    </button>

    <button 
      data-category="unas"
      class="cat-pill px-4 py-2 rounded-full text-xs font-semibold border border-pink-200 bg-white text-gray-700 whitespace-nowrap transition-all flex items-center gap-1.5"
    >
      <svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
      </svg>
      <span>Unas / Manicura</span>
    </button>

    <button 
      data-category="cejas-pestanas"
      class="cat-pill px-4 py-2 rounded-full text-xs font-semibold border border-pink-200 bg-white text-gray-700 whitespace-nowrap transition-all flex items-center gap-1.5"
    >
      <svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
      </svg>
      <span>Cejas & Pestanas</span>
    </button>

    <button 
      data-category="cuidado-herramientas"
      class="cat-pill px-4 py-2 rounded-full text-xs font-semibold border border-pink-200 bg-white text-gray-700 whitespace-nowrap transition-all flex items-center gap-1.5"
    >
      <svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
      </svg>
      <span>Cuidado & Herramientas</span>
    </button>
  </div>

  <!-- Products Grid Container -->
  <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php foreach ($products as $product): ?>
      <div class="product-card bg-white rounded-2xl overflow-hidden flex flex-col justify-between group relative" data-product-id="<?= htmlspecialchars($product['id']) ?>">
        <div class="relative w-full pt-[95%] overflow-hidden bg-pink-50/50">
          <img 
            src="<?= htmlspecialchars($product['image']) ?>" 
            alt="<?= htmlspecialchars($product['name']) ?>" 
            class="product-img absolute inset-0 w-full h-full object-cover object-center"
            loading="lazy"
          />
          <div class="absolute top-3 left-3 flex flex-col gap-1 z-10">
            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full <?= htmlspecialchars($product['badgeType']) ?>">
              <?= htmlspecialchars($product['badge']) ?>
            </span>
          </div>

          <button 
            onclick="toggleWishlist('<?= htmlspecialchars($product['id']) ?>')"
            class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/90 backdrop-blur-md shadow-md flex items-center justify-center transition-all hover:scale-110 active:scale-95 z-10 text-gray-400 hover:text-pink-500"
            title="Anadir a lista de deseos"
          >
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </button>

          <button 
            onclick="openQuickView('<?= htmlspecialchars($product['id']) ?>')"
            class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-white/95 hover:bg-white text-gray-800 text-xs font-semibold px-4 py-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 whitespace-nowrap flex items-center gap-1.5"
          >
            <svg class="w-3.5 h-3.5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            Vista Rapida
          </button>
        </div>

        <div class="p-5 flex flex-col flex-grow justify-between">
          <div>
            <div class="flex items-center justify-between text-xs text-gray-400 mb-1.5">
              <span class="font-medium text-pink-600 uppercase tracking-wider text-[11px]"><?= htmlspecialchars($product['categoryName']) ?></span>
              <div class="flex items-center text-amber-500 font-semibold gap-1">
                <svg class="w-3.5 h-3.5 fill-current text-amber-500" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span><?= number_format($product['rating'], 1) ?></span>
                <span class="text-gray-300 font-normal">(<?= $product['reviews'] ?>)</span>
              </div>
            </div>

            <h4 class="font-semibold text-gray-900 text-base leading-snug line-clamp-2 mb-2 group-hover:text-pink-600 transition-colors">
              <?= htmlspecialchars($product['name']) ?>
            </h4>

            <p class="text-gray-500 text-xs line-clamp-2 mb-4 leading-relaxed">
              <?= htmlspecialchars($product['description']) ?>
            </p>
          </div>

          <div class="pt-3 border-t border-gray-100">
            <!-- Precio y Sin Stock (Para que el cliente consulte) -->
            <div class="mb-3 flex items-baseline justify-between">
              <div>
                <div class="text-lg font-bold text-gray-900">
                  $<?= number_format($product['priceUsd'], 2) ?>
                  <span class="text-xs text-gray-400 font-normal">(Bs. <?= number_format($product['priceUsd'] * ($exchangeRate ?? 46.50), 2, ',', '.') ?>)</span>
                </div>
              </div>
              <!-- Reemplazo de stock por aviso de consulta -->
              <span class="text-[11px] px-2 py-0.5 rounded bg-pink-50 text-pink-700 font-medium">
                Consultar disponibilidad
              </span>
            </div>

            <div class="grid grid-cols-2 gap-2">
              <button 
                onclick="addToCart('<?= htmlspecialchars($product['id']) ?>')"
                class="w-full btn-primary-boutique py-2.5 px-3 rounded-xl text-xs font-semibold flex items-center justify-center gap-1.5 text-center"
              >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span>Anadir</span>
              </button>

              <button 
                onclick="buyDirectWhatsApp('<?= htmlspecialchars($product['id']) ?>')"
                class="w-full bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border border-emerald-200 py-2.5 px-3 rounded-xl text-xs font-semibold flex items-center justify-center gap-1.5 transition-colors"
                title="Consultar y comprar por WhatsApp"
              >
                <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
                </svg>
                <span>Consultar</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</section>

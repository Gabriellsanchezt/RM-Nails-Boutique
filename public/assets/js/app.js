/**
 * RM Nails Boutique - La boutique de las unas
 * Core E-Commerce Logic & Application State
 * Official WhatsApp: wa.me/584120549526
 * Instagram: @rmnailsboutique
 */

// Catalogo de Insumos Profesionales (Sin Kits y Sin Manejo de Stock para Consulta Directa)
const PRODUCTS = [
  {
    id: 'rm-01',
    name: 'Esmaltes Gel M&Y Collection (Gama 6 Tonos)',
    category: 'unas',
    categoryName: 'Unas / Manicura',
    priceUsd: 14.50,
    badge: 'MAS VENDIDO',
    badgeType: 'badge-gold',
    rating: 4.9,
    reviews: 84,
    image: 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&w=700&q=80',
    description: 'Coleccion de esmaltes semipermanentes de alta pigmentacion, brillo espejo y duracion prolongada sin desprendimiento.',
    features: ['Curado UV/LED en 60s', 'Formula libre de toxicos', 'Brocha plana de precision', 'Tonos nudes y vibrantes de temporada']
  },
  {
    id: 'rm-02',
    name: 'Lampara Profesional UV/LED Sun X5 Max 120W',
    category: 'unas',
    categoryName: 'Unas / Manicura',
    priceUsd: 22.00,
    badge: 'INDISPENSABLE',
    badgeType: 'badge-pink',
    rating: 5.0,
    reviews: 112,
    image: 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=700&q=80',
    description: 'Lampara de secado rapido con sensor inteligente, temporizador digital y modo bajo calor para evitar molestias.',
    features: ['Potencia de 120 Watts', '45 diodos LED estrategicamente distribuidos', 'Base removible para pedicura', 'Display digital LED']
  },
  {
    id: 'rm-03',
    name: 'Serum & Laminado de Cejas Iconsign Pro',
    category: 'cejas-pestanas',
    categoryName: 'Cejas & Pestanas',
    priceUsd: 18.00,
    badge: 'TOP BROWS',
    badgeType: 'badge-gold',
    rating: 4.8,
    reviews: 67,
    image: 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=700&q=80',
    description: 'Tratamiento profesional para direccionamiento y nutricion de cejas rebeldes en cabina.',
    features: ['Efecto cejas organicas de larga duracion', 'Lociones con colageno nutritivo', 'Incluye herramientas de peinado y almohadillas', 'Resultados definidos']
  },
  {
    id: 'rm-04',
    name: 'Pestanas Nagaraku Mix Volumen Ruso (0.07 C/D)',
    category: 'cejas-pestanas',
    categoryName: 'Cejas & Pestanas',
    priceUsd: 7.50,
    badge: 'LASH ARTIST',
    badgeType: 'badge-trend',
    rating: 4.9,
    reviews: 95,
    image: 'https://images.unsplash.com/photo-1583001809873-a128495da465?auto=format&fit=crop&w=700&q=80',
    description: 'Blister de extensiones de pestanas de fibra suave de alta gama. Ligeras y con curvatura estable.',
    features: ['Mix de longitudes (7mm a 15mm)', 'Color negro mate profundo sin reflejos plasticos', 'Facil despegue de la tira adhesiva', 'Ideales para abanicos de volumen']
  },
  {
    id: 'rm-05',
    name: 'Aceite Nutritivo para Cuticulas Gold 24k (30ml)',
    category: 'cuidado-herramientas',
    categoryName: 'Cuidado & Herramientas',
    priceUsd: 6.00,
    badge: 'AROMATERAPIA',
    badgeType: 'badge-pink',
    rating: 4.9,
    reviews: 53,
    image: 'https://images.unsplash.com/photo-1608248597359-50953a393fb6?auto=format&fit=crop&w=700&q=80',
    description: 'Elixir regenerador con micro-particulas doradas, aceite de almendras dulces y vitamina E.',
    features: ['Hidratacion profunda sin sensacion grasa', 'Aroma floral suave', 'Gotero higienico dosificador', 'Previene resequedad']
  },
  {
    id: 'rm-06',
    name: 'Pincel Kolinsky #8 Profesional para Acrilico',
    category: 'unas',
    categoryName: 'Unas / Manicura',
    priceUsd: 19.50,
    badge: 'CALIDAD PREMIUM',
    badgeType: 'badge-gold',
    rating: 5.0,
    reviews: 42,
    image: 'https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=700&q=80',
    description: 'Pelo 100% Kolinsky con punta ovalada calibrada. Mango de metal oro rosa balanceado para control de la perla.',
    features: ['Cerdas compactas de alta retencion de monomero', 'Resistente a la acetona pura', 'Tapa protectora metalica incluida', 'Nivel profesional']
  },
  {
    id: 'rm-07',
    name: 'Limas Profesionales Spongee 100/180 (Pack x10)',
    category: 'unas',
    categoryName: 'Unas / Manicura',
    priceUsd: 8.00,
    badge: 'PACK PROFESIONAL',
    badgeType: 'badge-trend',
    rating: 4.8,
    reviews: 61,
    image: 'https://images.unsplash.com/photo-1599305090598-fe179d501227?auto=format&fit=crop&w=700&q=80',
    description: 'Limas pulidoras acolchadas de doble grano. Suavizan la superficie de la una antes de esmaltar o sellar brillo.',
    features: ['Grano 100/180 de durabilidad extendida', 'Espuma interior flexible', 'Desinfectables', 'Empaque de 10 unidades']
  },
  {
    id: 'rm-08',
    name: 'Pegamento de Pestanas Lady Black Ultra (5ml)',
    category: 'cejas-pestanas',
    categoryName: 'Cejas & Pestanas',
    priceUsd: 16.50,
    badge: 'SECADO RAPIDO',
    badgeType: 'badge-pink',
    rating: 4.9,
    reviews: 78,
    image: 'https://images.unsplash.com/photo-1526045612212-70caf35c14df?auto=format&fit=crop&w=700&q=80',
    description: 'Adhesivo de grado profesional para extensiones de pestanas con tiempo de fijacion de 1 a 2 segundos.',
    features: ['Bajo nivel de vapores', 'Color negro carbon para acabado limpio', 'Formula de alta retencion', 'Bolsa termica sellada']
  },
  {
    id: 'rm-10',
    name: 'Set de Fresas de Diamante para Manicura Rusa (7 piezas)',
    category: 'cuidado-herramientas',
    categoryName: 'Cuidado & Herramientas',
    priceUsd: 12.00,
    badge: 'MANICURA RUSA',
    badgeType: 'badge-trend',
    rating: 4.9,
    reviews: 44,
    image: 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=700&q=80',
    description: 'Brocas de precision diamantadas para limpieza de cuticula y preparacion de la placa ungueal.',
    features: ['Vastago estandar de 3/32 compatible con drills', 'Esterilizables en calor seco o autoclave', 'Formas llama, esfera, cono y cilindro', 'Estuche organizador']
  },
  {
    id: 'rm-11',
    name: 'Pinza Curva de Precision para Volumen Ruso Gold',
    category: 'cejas-pestanas',
    categoryName: 'Cejas & Pestanas',
    priceUsd: 9.50,
    badge: 'ORO ROSA',
    badgeType: 'badge-gold',
    rating: 4.8,
    reviews: 31,
    image: 'https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=700&q=80',
    description: 'Pinza de acero inoxidable con calibracion manual para armado de abanicos precisos.',
    features: ['Cierre hermetico de punta a punta', 'Acabado en titanio oro rosa', 'Puntas afiladas a mano', 'Peso ultraligero']
  },
  {
    id: 'rm-12',
    name: 'Extractor Colector de Polvo 80W para Mesa de Unas',
    category: 'cuidado-herramientas',
    categoryName: 'Cuidado & Herramientas',
    priceUsd: 34.00,
    badge: 'HIGIENE Y SALUD',
    badgeType: 'badge-pink',
    rating: 4.9,
    reviews: 29,
    image: 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=700&q=80',
    description: 'Extractor con filtro HEPA reutilizable para mantener el area de trabajo libre de polvillo.',
    features: ['Motor de alta succion de 80W', 'Filtro lavable extraible', 'Diseno ergonomico para descanso de la mano', 'Control de potencia']
  }
];

// Estado de la Aplicacion
const STATE = {
  exchangeRate: 875.65, // Tasa de respaldo inicial, se actualiza via API
  rateSource: 'BCV Oficial',
  isRateFrozen: false,
  currency: 'USD',
  
  cart: [],
  wishlist: [],
  
  category: 'all',
  searchQuery: '',
  sortBy: 'featured',
  
  deliveryMethod: 'delivery-bqto',
  deliveryCost: 2.50,
  
  quickViewProduct: null
};

// Cargar estado inicial (El carrito SIEMPRE inicia en 0 al recargar o reiniciar la pagina)
function loadPersistedState() {
  try {
    // REGLA FUNDAMENTAL DE E-COMMERCE:
    // Cada vez que se reinicia o recarga la pagina, los productos seleccionados para el carrito inician en 0.
    STATE.cart = [];
    localStorage.removeItem('rm_cart');
    sessionStorage.removeItem('rm_cart');
    
    const savedWishlist = localStorage.getItem('rm_wishlist');
    if (savedWishlist) {
      try {
        const parsed = JSON.parse(savedWishlist);
        if (Array.isArray(parsed)) STATE.wishlist = parsed;
      } catch (e) {
        STATE.wishlist = [];
      }
    }

    const savedCurrency = localStorage.getItem('rm_currency');
    if (savedCurrency && (savedCurrency === 'USD' || savedCurrency === 'VES')) {
      STATE.currency = savedCurrency;
    }

    // Recuperar tasa congelada en caso de conexion fallida
    const frozenRate = localStorage.getItem('rm_frozen_rate');
    if (frozenRate) {
      const parsedRate = parseFloat(frozenRate);
      if (!isNaN(parsedRate) && parsedRate > 0) {
        STATE.exchangeRate = parsedRate;
        STATE.isRateFrozen = true;
      }
    }
  } catch (e) {
    console.warn('Error leyendo almacenamiento local', e);
  }
}

// Helper para resolver rutas API relativas a subcarpetas de Apache o raiz
function getApiUrl(endpoint) {
  const path = window.location.pathname;
  if (path.includes('/rm-nails-boutique')) {
    return '/rm-nails-boutique' + endpoint;
  }
  return endpoint;
}

// Consultar API de tasa oficial y congelar en caso de fallo
async function fetchOfficialRate() {
  const controller = new AbortController();
  const timeoutId = setTimeout(() => controller.abort(), 3500);

  try {
    const res = await fetch(getApiUrl('/api/rate'), { 
      cache: 'no-store',
      signal: controller.signal
    });
    clearTimeout(timeoutId);

    if (res.ok) {
      const json = await res.json();
      if (json && json.status === 'success' && json.data && json.data.rate) {
        const parsedRate = parseFloat(json.data.rate);
        if (!isNaN(parsedRate) && parsedRate > 0) {
          STATE.exchangeRate = parsedRate;
          STATE.rateSource = json.data.source || 'BCV Oficial';
          STATE.isRateFrozen = Boolean(json.data.frozen);

          // Congelar en localStorage para contingencia de conexion
          try {
            localStorage.setItem('rm_frozen_rate', STATE.exchangeRate.toString());
          } catch (e) {}

          updateCurrencyDisplay();
          renderProducts();
          renderCartDrawer();
          return;
        }
      }
    }
  } catch (err) {
    clearTimeout(timeoutId);
    console.info('Problema consultando la API en vivo. Congelando tasa en ultimo valor registrado.', err);
    STATE.isRateFrozen = true;
  }

  updateCurrencyDisplay();
}

function persistCart() {
  // El carrito vive exclusivamente en la sesion de navegacion activa en memoria:
  // Cualquier recarga o reinicio de pagina garantiza que el carrito inicie en 0.
  try {
    localStorage.removeItem('rm_cart');
    sessionStorage.removeItem('rm_cart');
  } catch (e) {
    // Ignorar restricciones en entornos aislados
  }
}

function persistWishlist() {
  try {
    localStorage.setItem('rm_wishlist', JSON.stringify(STATE.wishlist));
  } catch (e) {
    console.warn(e);
  }
}

// Formateador de precios robusto (USD / Bs)
function formatPrice(usdAmount) {
  const validUsd = typeof usdAmount === 'number' && !isNaN(usdAmount) ? Math.max(0, usdAmount) : 0;
  const validRate = typeof STATE.exchangeRate === 'number' && !isNaN(STATE.exchangeRate) && STATE.exchangeRate > 0 ? STATE.exchangeRate : 46.50;

  const usdFormatted = `$${validUsd.toFixed(2)}`;
  const vesAmount = validUsd * validRate;
  const vesFormatted = `Bs. ${vesAmount.toLocaleString('es-VE', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

  if (STATE.currency === 'VES') {
    return `<span class="font-bold text-gray-900">${vesFormatted}</span> <span class="text-xs text-gray-400 font-normal">(${usdFormatted})</span>`;
  }
  return `<span class="font-bold text-gray-900">${usdFormatted}</span> <span class="text-xs text-gray-400 font-normal">(${vesFormatted})</span>`;
}

// Elementos del DOM
let elements = {};

function initElements() {
  elements = {
    productsGrid: document.getElementById('products-grid'),
    productCount: document.getElementById('product-count'),
    cartCountBadges: document.querySelectorAll('.cart-count-badge'),
    wishlistCountBadges: document.querySelectorAll('.wishlist-count-badge'),
    cartDrawerBackdrop: document.getElementById('cart-drawer-backdrop'),
    cartDrawer: document.getElementById('cart-drawer'),
    cartItemsList: document.getElementById('cart-items-list'),
    cartEmptyState: document.getElementById('cart-empty-state'),
    cartSubtotalUsd: document.getElementById('cart-subtotal-usd'),
    cartSubtotalVes: document.getElementById('cart-subtotal-ves'),
    cartShippingText: document.getElementById('cart-shipping-text'),
    cartTotalUsd: document.getElementById('cart-total-usd'),
    cartTotalVes: document.getElementById('cart-total-ves'),
    searchInput: document.getElementById('search-input'),
    mobileSearchInput: document.getElementById('mobile-search-input'),
    sortSelect: document.getElementById('sort-select'),
    categoryPills: document.querySelectorAll('.cat-pill'),
    currencyToggleBtn: document.getElementById('currency-toggle-btn'),
    currentCurrencyLabel: document.getElementById('current-currency-label'),
    currentRateLabel: document.getElementById('current-rate-label'),
    rateFrozenBadge: document.getElementById('rate-frozen-badge'),
    rateModal: document.getElementById('rate-modal'),
    customRateInput: document.getElementById('custom-rate-input'),
    
    quickViewModal: document.getElementById('quickview-modal'),
    quickViewContainer: document.getElementById('quickview-content'),
    
    checkoutModal: document.getElementById('checkout-modal'),
    checkoutForm: document.getElementById('checkout-form'),
    checkoutSummaryItems: document.getElementById('checkout-summary-items'),
    checkoutTotalUsd: document.getElementById('checkout-total-usd'),
    checkoutTotalVes: document.getElementById('checkout-total-ves'),
    
    mobileMenuDrawer: document.getElementById('mobile-menu-drawer'),
    mobileMenuBackdrop: document.getElementById('mobile-menu-backdrop'),
    
    wishlistModal: document.getElementById('wishlist-modal'),
    wishlistItemsList: document.getElementById('wishlist-items-list'),
    wishlistEmptyState: document.getElementById('wishlist-empty-state')
  };
}

// Helper para normalizar busquedas ignorando tildes y mayusculas
function normalizeSearchTerm(str) {
  return (str || '')
    .toString()
    .toLowerCase()
    .normalize('NFD')
    .replace(/[\u0300-\u036f]/g, '')
    .replace(/ñ/g, 'n');
}

// Renderizado de Catalogo
function renderProducts() {
  if (!elements.productsGrid) return;
  
  let filtered = PRODUCTS.filter(prod => {
    const matchesCat = STATE.category === 'all' || prod.category === STATE.category;
    const query = normalizeSearchTerm(STATE.searchQuery.trim());
    const matchesSearch = !query || 
      normalizeSearchTerm(prod.name).includes(query) || 
      normalizeSearchTerm(prod.description).includes(query) ||
      normalizeSearchTerm(prod.categoryName).includes(query) ||
      (Array.isArray(prod.features) && prod.features.some(f => normalizeSearchTerm(f).includes(query)));
    
    return matchesCat && matchesSearch;
  });

  if (STATE.sortBy === 'price-asc') {
    filtered.sort((a, b) => a.priceUsd - b.priceUsd);
  } else if (STATE.sortBy === 'price-desc') {
    filtered.sort((a, b) => b.priceUsd - a.priceUsd);
  } else if (STATE.sortBy === 'rating') {
    filtered.sort((a, b) => b.rating - a.rating);
  }

  if (elements.productCount) {
    elements.productCount.textContent = `${filtered.length} insumos disponibles`;
  }

  if (filtered.length === 0) {
    elements.productsGrid.innerHTML = `
      <div class="col-span-full py-16 text-center bg-white rounded-3xl border border-dashed border-pink-200 p-8">
        <h3 class="text-xl font-serif font-bold text-gray-800 mb-2">No encontramos insumos con ese criterio</h3>
        <p class="text-gray-500 max-w-md mx-auto text-sm mb-6">Prueba con palabras como "gel", "pestanas", "limas", "aceite" o muestra todo el catalogo.</p>
        <button onclick="resetFilters()" class="btn-primary-boutique px-6 py-2.5 rounded-full text-sm font-semibold">
          Mostrar Todo el Catalogo
        </button>
      </div>
    `;
    return;
  }

  elements.productsGrid.innerHTML = filtered.map(product => {
    const isWishlisted = STATE.wishlist.includes(product.id);
    const inCartQty = (STATE.cart.find(item => item.id === product.id) || {}).quantity || 0;
    
    return `
      <div class="product-card bg-white rounded-2xl overflow-hidden flex flex-col justify-between group relative" data-product-id="${product.id}">
        <div class="relative w-full pt-[95%] overflow-hidden bg-pink-50/50">
          <img 
            src="${product.image}" 
            alt="${product.name}" 
            class="product-img absolute inset-0 w-full h-full object-cover object-center"
            loading="lazy"
            onerror="this.onerror=null; this.src='assets/images/logo.jpg'; this.classList.add('object-contain', 'p-6', 'bg-pink-50');"
          />
          
          <div class="absolute top-3 left-3 flex flex-col gap-1 z-10">
            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full ${product.badgeType}">
              ${product.badge}
            </span>
          </div>

          <button 
            onclick="toggleWishlist('${product.id}')"
            class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/90 backdrop-blur-md shadow-md flex items-center justify-center transition-all hover:scale-110 active:scale-95 z-10 text-gray-400 hover:text-pink-500"
            title="Anadir a lista de deseos"
          >
            <svg class="w-5 h-5 ${isWishlisted ? 'text-pink-600 fill-current' : 'text-gray-400'}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </button>

          <button 
            onclick="openQuickView('${product.id}')"
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
              <span class="font-medium text-pink-600 uppercase tracking-wider text-[11px]">${product.categoryName}</span>
              <div class="flex items-center text-amber-500 font-semibold gap-1">
                <svg class="w-3.5 h-3.5 fill-current text-amber-500" viewBox="0 0 20 20">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span>${product.rating.toFixed(1)}</span>
                <span class="text-gray-300 font-normal">(${product.reviews})</span>
              </div>
            </div>

            <h4 class="font-semibold text-gray-900 text-base leading-snug line-clamp-2 mb-2 group-hover:text-pink-600 transition-colors">
              ${product.name}
            </h4>

            <p class="text-gray-500 text-xs line-clamp-2 mb-4 leading-relaxed">
              ${product.description}
            </p>
          </div>

          <div class="pt-3 border-t border-gray-100">
            <div class="mb-3 flex items-baseline justify-between">
              <div>
                <div class="text-lg">
                  ${formatPrice(product.priceUsd)}
                </div>
              </div>
              <span class="text-[11px] px-2 py-0.5 rounded bg-pink-50 text-pink-700 font-medium">
                Consultar disponibilidad
              </span>
            </div>

            <div class="grid grid-cols-2 gap-1.5 sm:gap-2">
              <button 
                onclick="addToCart('${product.id}')"
                class="w-full btn-primary-boutique py-2 sm:py-2.5 px-2 sm:px-3 rounded-xl text-[11px] sm:text-xs font-semibold flex items-center justify-center gap-1 sm:gap-1.5 text-center min-h-[38px]"
              >
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span>${inCartQty > 0 ? `En Carrito (${inCartQty})` : 'Anadir'}</span>
              </button>

              <button 
                onclick="buyDirectWhatsApp('${product.id}')"
                class="w-full bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border border-emerald-200 py-2 sm:py-2.5 px-2 sm:px-3 rounded-xl text-[11px] sm:text-xs font-semibold flex items-center justify-center gap-1 sm:gap-1.5 transition-colors min-h-[38px]"
                title="Consultar por WhatsApp"
              >
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
                </svg>
                <span>Consultar</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
  }).join('');
}

// Gestion de Carrito Robusta
function addToCart(productId, qty = 1) {
  const product = PRODUCTS.find(p => p.id === productId);
  if (!product) return;

  const validQty = Math.min(99, Math.max(1, parseInt(qty, 10) || 1));
  const existing = STATE.cart.find(item => item.id === productId);
  if (existing) {
    existing.quantity = Math.min(99, existing.quantity + validQty);
  } else {
    STATE.cart.push({
      id: product.id,
      name: product.name,
      priceUsd: product.priceUsd,
      image: product.image,
      categoryName: product.categoryName,
      quantity: validQty
    });
  }

  persistCart();
  updateCartCounters();
  renderProducts();
  showToast(`Anadido: ${product.name.slice(0, 26)}... a tu orden.`, 'success');
}

function updateCartQuantity(productId, delta) {
  const item = STATE.cart.find(i => i.id === productId);
  if (!item) return;

  const validDelta = parseInt(delta, 10) || 0;
  const nextQty = item.quantity + validDelta;

  if (nextQty <= 0) {
    removeFromCart(productId, false);
  } else {
    item.quantity = Math.min(99, nextQty);
    persistCart();
    updateCartCounters();
    renderCartDrawer();
    renderProducts();
  }
}

function removeFromCart(productId, notify = true) {
  const item = STATE.cart.find(i => i.id === productId);
  STATE.cart = STATE.cart.filter(i => i.id !== productId);
  persistCart();
  updateCartCounters();
  renderCartDrawer();
  renderProducts();
  if (notify && item) {
    showToast(`Eliminaste ${item.name.slice(0, 22)}... del carrito.`, 'info');
  }
}

function clearCart() {
  STATE.cart = [];
  persistCart();
  updateCartCounters();
  renderCartDrawer();
  renderProducts();
  showToast('Has vaciado tu carrito de compras.', 'info');
}

function updateCartCounters() {
  const totalCount = (STATE.cart || []).reduce((sum, item) => sum + (parseInt(item.quantity, 10) || 0), 0);
  if (elements.cartCountBadges) {
    elements.cartCountBadges.forEach(badge => {
      badge.textContent = totalCount;
      if (totalCount > 0) {
        badge.classList.remove('hidden');
      } else {
        badge.classList.add('hidden');
      }
    });
  }

  const totalWishlist = (STATE.wishlist || []).length;
  if (elements.wishlistCountBadges) {
    elements.wishlistCountBadges.forEach(badge => {
      badge.textContent = totalWishlist;
      if (totalWishlist > 0) {
        badge.classList.remove('hidden');
      } else {
        badge.classList.add('hidden');
      }
    });
  }
}

function calculateCartTotals() {
  const subtotalUsd = STATE.cart.reduce((sum, item) => sum + (item.priceUsd * item.quantity), 0);
  
  let shippingCostUsd = 0;
  if (STATE.deliveryMethod === 'delivery-bqto') {
    shippingCostUsd = subtotalUsd >= 35 ? 0 : 2.50;
  } else if (STATE.deliveryMethod === 'tienda-bqto') {
    shippingCostUsd = 0;
  } else if (STATE.deliveryMethod === 'nacional-vzla') {
    shippingCostUsd = 0;
  }

  const totalUsd = subtotalUsd + shippingCostUsd;
  const subtotalVes = subtotalUsd * STATE.exchangeRate;
  const totalVes = totalUsd * STATE.exchangeRate;

  return {
    subtotalUsd,
    shippingCostUsd,
    totalUsd,
    subtotalVes,
    totalVes
  };
}

function renderCartDrawer() {
  const totals = calculateCartTotals();

  if (STATE.cart.length === 0) {
    if (elements.cartItemsList) elements.cartItemsList.classList.add('hidden');
    if (elements.cartEmptyState) elements.cartEmptyState.classList.remove('hidden');
    const footer = document.getElementById('cart-checkout-footer');
    if (footer) footer.classList.add('hidden');

    const progressElem = document.getElementById('free-delivery-progress');
    const progressText = document.getElementById('free-delivery-text');
    if (progressElem && progressText) {
      progressElem.style.width = '0%';
      progressElem.className = 'h-1.5 rounded-full bg-pink-500 transition-all duration-300';
      progressText.innerHTML = 'Agrega <strong>$35.00</strong> mas para delivery gratis en Bqto';
    }

    if (elements.cartSubtotalUsd) elements.cartSubtotalUsd.textContent = '$0.00';
    if (elements.cartSubtotalVes) elements.cartSubtotalVes.textContent = 'Bs. 0.00';
    if (elements.cartTotalUsd) elements.cartTotalUsd.textContent = '$0.00';
    if (elements.cartTotalVes) elements.cartTotalVes.textContent = 'Bs. 0.00';
    return;
  }

  elements.cartEmptyState.classList.add('hidden');
  elements.cartItemsList.classList.remove('hidden');
  document.getElementById('cart-checkout-footer').classList.remove('hidden');

  elements.cartItemsList.innerHTML = STATE.cart.map(item => {
    const itemTotalUsd = item.priceUsd * item.quantity;
    const itemTotalVes = itemTotalUsd * STATE.exchangeRate;
    return `
      <div class="flex items-center gap-3 py-3 border-b border-pink-50 last:border-b-0">
        <img src="${item.image}" alt="${item.name}" class="w-16 h-16 rounded-xl object-cover border border-pink-100 flex-shrink-0" />
        <div class="flex-grow min-w-0">
          <h5 class="text-xs font-semibold text-gray-800 truncate">${item.name}</h5>
          <p class="text-[11px] text-gray-400 mb-1.5">${item.categoryName} • $${item.priceUsd.toFixed(2)} c/u</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center border border-pink-200 rounded-lg bg-pink-50/40 overflow-hidden">
              <button onclick="updateCartQuantity('${item.id}', -1)" class="w-6 h-6 flex items-center justify-center text-gray-600 hover:bg-pink-100 text-xs font-bold">-</button>
              <span class="px-2.5 text-xs font-bold text-gray-800">${item.quantity}</span>
              <button onclick="updateCartQuantity('${item.id}', 1)" class="w-6 h-6 flex items-center justify-center text-gray-600 hover:bg-pink-100 text-xs font-bold">+</button>
            </div>
            <div class="text-right">
              <div class="text-xs font-bold text-pink-700">$${itemTotalUsd.toFixed(2)}</div>
              <div class="text-[10px] text-gray-400">Bs. ${itemTotalVes.toFixed(2)}</div>
            </div>
          </div>
        </div>
        <button onclick="removeFromCart('${item.id}')" class="text-gray-300 hover:text-red-500 p-1 transition-colors" title="Eliminar producto">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
          </svg>
        </button>
      </div>
    `;
  }).join('');

  const freeThreshold = 35;
  const progressElem = document.getElementById('free-delivery-progress');
  const progressText = document.getElementById('free-delivery-text');
  if (progressElem && progressText) {
    if (totals.subtotalUsd >= freeThreshold) {
      progressElem.style.width = '100%';
      progressElem.className = 'h-1.5 rounded-full bg-emerald-500 transition-all duration-300';
      progressText.innerHTML = 'Delivery GRATIS en Barquisimeto alcanzado';
    } else {
      const remaining = (freeThreshold - totals.subtotalUsd).toFixed(2);
      const percent = Math.min(100, Math.round((totals.subtotalUsd / freeThreshold) * 100));
      progressElem.style.width = `${percent}%`;
      progressElem.className = 'h-1.5 rounded-full bg-pink-500 transition-all duration-300';
      progressText.innerHTML = `Agrega <strong>$${remaining}</strong> mas para delivery gratis en Bqto`;
    }
  }

  elements.cartSubtotalUsd.textContent = `$${totals.subtotalUsd.toFixed(2)}`;
  elements.cartSubtotalVes.textContent = `Bs. ${totals.subtotalVes.toLocaleString('es-VE', { minimumFractionDigits: 2 })}`;

  if (STATE.deliveryMethod === 'delivery-bqto') {
    elements.cartShippingText.textContent = totals.shippingCostUsd === 0 ? 'Gratis' : `$${totals.shippingCostUsd.toFixed(2)}`;
  } else if (STATE.deliveryMethod === 'tienda-bqto') {
    elements.cartShippingText.textContent = 'Gratis (Retiro)';
  } else {
    elements.cartShippingText.textContent = 'Cobro en Destino (Encomienda)';
  }

  elements.cartTotalUsd.textContent = `$${totals.totalUsd.toFixed(2)}`;
  elements.cartTotalVes.textContent = `Bs. ${totals.totalVes.toLocaleString('es-VE', { minimumFractionDigits: 2 })}`;
}

function openCartDrawer() {
  renderCartDrawer();
  elements.cartDrawerBackdrop.classList.add('active');
  elements.cartDrawer.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeCartDrawer() {
  elements.cartDrawerBackdrop.classList.remove('active');
  elements.cartDrawer.classList.remove('active');
  document.body.style.overflow = '';
}

function toggleWishlist(productId) {
  const index = STATE.wishlist.indexOf(productId);
  const product = PRODUCTS.find(p => p.id === productId);

  if (index > -1) {
    STATE.wishlist.splice(index, 1);
    showToast(`Removiste ${product?.name?.slice(0, 20)} de favoritos.`, 'info');
  } else {
    STATE.wishlist.push(productId);
    showToast(`Anadido a tus favoritos.`, 'success');
  }

  persistWishlist();
  updateCartCounters();
  renderProducts();
}

function openWishlistModal() {
  const wishlistedProducts = PRODUCTS.filter(p => STATE.wishlist.includes(p.id));
  
  if (wishlistedProducts.length === 0) {
    elements.wishlistItemsList.innerHTML = '';
    elements.wishlistEmptyState.classList.remove('hidden');
  } else {
    elements.wishlistEmptyState.classList.add('hidden');
    elements.wishlistItemsList.innerHTML = wishlistedProducts.map(prod => `
      <div class="flex items-center gap-3 p-3 bg-pink-50/40 rounded-xl border border-pink-100">
        <img src="${prod.image}" alt="${prod.name}" class="w-14 h-14 rounded-lg object-cover" />
        <div class="flex-grow min-w-0">
          <h5 class="text-xs font-bold text-gray-800 truncate">${prod.name}</h5>
          <div class="text-xs text-pink-600 font-semibold mb-1">${formatPrice(prod.priceUsd)}</div>
          <button onclick="addToCart('${prod.id}'); toggleWishlist('${prod.id}');" class="text-[11px] font-semibold text-white bg-pink-500 hover:bg-pink-600 px-3 py-1 rounded-md transition-colors">
            Mover al Carrito
          </button>
        </div>
        <button onclick="toggleWishlist('${prod.id}'); openWishlistModal();" class="text-gray-400 hover:text-red-500 p-1">
          ✕
        </button>
      </div>
    `).join('');
  }

  elements.wishlistModal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeWishlistModal() {
  elements.wishlistModal.classList.remove('active');
  document.body.style.overflow = '';
}

function openQuickView(productId) {
  const prod = PRODUCTS.find(p => p.id === productId);
  if (!prod) return;

  STATE.quickViewProduct = prod;

  elements.quickViewContainer.innerHTML = `
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 p-4 sm:p-6">
      <div class="relative rounded-2xl overflow-hidden bg-pink-50 aspect-square">
        <img src="${prod.image}" alt="${prod.name}" class="w-full h-full object-cover" />
        <span class="absolute top-3 left-3 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full ${prod.badgeType}">
          ${prod.badge}
        </span>
      </div>
      <div class="flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between text-xs text-gray-400 mb-2">
            <span class="font-bold text-pink-600 uppercase text-[11px] sm:text-xs">${prod.categoryName}</span>
            <span class="text-amber-500 font-bold">${prod.rating} (${prod.reviews} resenas)</span>
          </div>
          <h3 class="text-lg sm:text-xl font-serif font-bold text-gray-900 mb-2 leading-snug">${prod.name}</h3>
          <div class="text-lg sm:text-xl mb-3">
            ${formatPrice(prod.priceUsd)}
          </div>
          <p class="text-xs text-gray-600 leading-relaxed mb-4">${prod.description}</p>
          
          <div class="bg-pink-50/50 rounded-xl p-3 border border-pink-100 mb-4">
            <h6 class="text-[10px] sm:text-[11px] font-bold uppercase text-pink-900 mb-2 tracking-wider">Caracteristicas Profesionales:</h6>
            <ul class="text-xs text-gray-700 space-y-1">
              ${prod.features.map(f => `<li class="flex items-center gap-1.5"><span class="text-pink-500 font-bold">✓</span> ${f}</li>`).join('')}
            </ul>
          </div>
        </div>

        <div class="pt-3 border-t border-gray-100 flex flex-col gap-2.5">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="flex items-center border border-pink-200 rounded-xl bg-pink-50/50 p-1">
              <button onclick="adjustQuickViewQty(-1)" class="w-8 h-8 rounded-lg flex items-center justify-center font-bold text-gray-600 hover:bg-pink-100 text-sm">-</button>
              <input id="quickview-qty" type="number" value="1" min="1" max="50" class="w-10 sm:w-12 text-center text-sm font-bold bg-transparent border-none outline-none" />
              <button onclick="adjustQuickViewQty(1)" class="w-8 h-8 rounded-lg flex items-center justify-center font-bold text-gray-600 hover:bg-pink-100 text-sm">+</button>
            </div>
            <button onclick="addQuickViewToCart()" class="flex-grow btn-primary-boutique py-2.5 sm:py-3 px-3 rounded-xl text-xs font-bold flex items-center justify-center gap-1.5 sm:gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
              </svg>
              <span>Anadir a mi Pedido</span>
            </button>
          </div>

          <button onclick="buyDirectWhatsApp('${prod.id}')" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2.5 sm:py-3 rounded-xl text-xs flex items-center justify-center gap-2 shadow-sm transition-all">
            <svg class="w-4 h-4 fill-current flex-shrink-0" viewBox="0 0 24 24">
              <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
            </svg>
            <span>Consultar este producto por WhatsApp</span>
          </button>
        </div>
      </div>
    </div>
  `;

  elements.quickViewModal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function adjustQuickViewQty(delta) {
  const input = document.getElementById('quickview-qty');
  if (!input) return;
  let val = parseInt(input.value) || 1;
  val = Math.max(1, Math.min(50, val + delta));
  input.value = val;
}

function addQuickViewToCart() {
  if (!STATE.quickViewProduct) return;
  const input = document.getElementById('quickview-qty');
  const qty = input ? parseInt(input.value) || 1 : 1;
  addToCart(STATE.quickViewProduct.id, qty);
  closeQuickView();
  openCartDrawer();
}

function closeQuickView() {
  elements.quickViewModal.classList.remove('active');
  document.body.style.overflow = '';
  STATE.quickViewProduct = null;
}

function openCheckoutModal() {
  if (STATE.cart.length === 0) {
    showToast('Tu carrito esta vacio. Agrega productos para ordenar.', 'warning');
    return;
  }

  closeCartDrawer();
  const totals = calculateCartTotals();

  elements.checkoutSummaryItems.innerHTML = STATE.cart.map(i => `
    <div class="flex justify-between items-center text-xs py-1.5 border-b border-gray-100 last:border-0">
      <div class="truncate pr-2">
        <span class="font-bold text-gray-800">${i.quantity}x</span> ${i.name}
      </div>
      <div class="font-bold text-pink-700 whitespace-nowrap">$${(i.priceUsd * i.quantity).toFixed(2)}</div>
    </div>
  `).join('');

  elements.checkoutTotalUsd.textContent = `$${totals.totalUsd.toFixed(2)}`;
  elements.checkoutTotalVes.textContent = `Bs. ${totals.totalVes.toLocaleString('es-VE', { minimumFractionDigits: 2 })}`;

  // Limpiar cualquier alerta previa
  const formAlert = document.getElementById('checkout-form-alert');
  if (formAlert) {
    formAlert.classList.add('hidden');
    formAlert.textContent = '';
  }

  const nameInput = document.getElementById('customer-name');
  const phoneInput = document.getElementById('customer-phone');
  const cityInput = document.getElementById('customer-city');
  const addressInput = document.getElementById('customer-address');

  if (nameInput && !nameInput.value) clearFieldValidationState(nameInput, document.getElementById('error-customer-name'));
  if (phoneInput && !phoneInput.value) clearFieldValidationState(phoneInput, document.getElementById('error-customer-phone'));
  if (cityInput && !cityInput.value) clearFieldValidationState(cityInput, document.getElementById('error-customer-city'));
  if (addressInput && !addressInput.value) clearFieldValidationState(addressInput, document.getElementById('error-customer-address'));

  updateCheckoutAddressRequirement();

  elements.checkoutModal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeCheckoutModal() {
  elements.checkoutModal.classList.remove('active');
  document.body.style.overflow = '';
}

// Validacion estricta de campos del formulario de Checkout
const CHECKOUT_VALIDATORS = {
  name: (val) => {
    const v = (val || '').trim();
    if (!v) return { valid: false, message: 'Por favor ingresa tu nombre completo.' };
    if (/[0-9]/.test(v)) {
      return { valid: false, message: 'El nombre solo puede contener letras (no se permiten numeros).' };
    }
    if (v.length < 3) return { valid: false, message: 'El nombre debe tener al menos 3 caracteres.' };
    if (!/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s\.\-]+$/.test(v)) {
      return { valid: false, message: 'El nombre solo debe contener letras y espacios.' };
    }
    return { valid: true };
  },

  phone: (val) => {
    const v = (val || '').trim();
    if (!v) return { valid: false, message: 'Por favor ingresa tu numero de telefono o WhatsApp.' };
    if (/[a-zA-Z]/.test(v)) {
      return { valid: false, message: 'El telefono no debe contener letras. Solo numeros.' };
    }
    const digits = v.replace(/\D/g, '');
    if (digits.length < 10) {
      return { valid: false, message: 'Ingresa un telefono valido con al menos 10 digitos (ej. 0412 1234567).' };
    }
    if (digits.length > 15) {
      return { valid: false, message: 'El numero de telefono no puede tener mas de 15 digitos.' };
    }
    return { valid: true };
  },

  city: (val) => {
    const v = (val || '').trim();
    if (!v) return { valid: false, message: 'Por favor indica la ciudad o estado (ej. Barquisimeto, Caracas).' };
    if (/[0-9]/.test(v)) {
      return { valid: false, message: 'La ciudad no puede contener numeros. Solo letras.' };
    }
    if (v.length < 3) return { valid: false, message: 'La ciudad o estado debe tener al menos 3 caracteres.' };
    return { valid: true };
  },

  address: (val, deliveryMethod) => {
    const v = (val || '').trim();
    if (deliveryMethod === 'Retiro en Tienda Barquisimeto') {
      return { valid: true };
    }
    if (!v) {
      return { valid: false, message: 'Por favor indica la direccion de entrega o nombre de tu salon.' };
    }
    if (v.length < 5) {
      return { valid: false, message: 'La direccion debe tener al menos 5 caracteres (calle, sector o punto de referencia).' };
    }
    return { valid: true };
  }
};

function setFieldValidationState(inputEl, errorEl, res) {
  if (!inputEl) return;
  if (res.valid) {
    inputEl.classList.remove('border-pink-200', 'border-rose-500', 'bg-rose-50/20');
    inputEl.classList.add('border-emerald-500', 'bg-emerald-50/20');
    if (errorEl) {
      errorEl.textContent = '';
      errorEl.classList.add('hidden');
    }
  } else {
    inputEl.classList.remove('border-pink-200', 'border-emerald-500', 'bg-emerald-50/20');
    inputEl.classList.add('border-rose-500', 'bg-rose-50/20');
    if (errorEl) {
      errorEl.textContent = res.message;
      errorEl.classList.remove('hidden');
    }
  }
}

function clearFieldValidationState(inputEl, errorEl) {
  if (!inputEl) return;
  inputEl.classList.remove('border-rose-500', 'bg-rose-50/20', 'border-emerald-500', 'bg-emerald-50/20');
  inputEl.classList.add('border-pink-200');
  if (errorEl) {
    errorEl.textContent = '';
    errorEl.classList.add('hidden');
  }
}

function updateCheckoutAddressRequirement() {
  const deliveryType = document.querySelector('input[name="shipping_method"]:checked')?.value || 'Delivery en Barquisimeto';
  const labelText = document.getElementById('label-address-text');
  const labelReq = document.getElementById('label-address-req');
  const addressInput = document.getElementById('customer-address');
  const addressError = document.getElementById('error-customer-address');

  if (!labelText || !addressInput) return;

  if (deliveryType === 'Retiro en Tienda Barquisimeto') {
    labelText.textContent = 'Direccion o Punto de Retiro (Opcional)';
    if (labelReq) labelReq.classList.add('hidden');
    addressInput.placeholder = 'Punto de entrega en Barquisimeto (coordinar por WhatsApp)';
    clearFieldValidationState(addressInput, addressError);
  } else if (deliveryType === 'Envio Nacional (MRW/Zoom/Tealca)') {
    labelText.textContent = 'Direccion de Agencia o Domicilio Nacional';
    if (labelReq) labelReq.classList.remove('hidden');
    addressInput.placeholder = 'Ej. Agencia MRW Este, Av. Venezuela c/c 22';
  } else {
    labelText.textContent = 'Direccion / Salon en Barquisimeto';
    if (labelReq) labelReq.classList.remove('hidden');
    addressInput.placeholder = 'Ej. Urb. Del Este, Calle 8, Salon Glamour';
  }
}

// Enviar lista del pedido a WhatsApp formateada sin emojis
async function handleCheckoutSubmit(event) {
  event.preventDefault();

  const nameInput = document.getElementById('customer-name');
  const phoneInput = document.getElementById('customer-phone');
  const cityInput = document.getElementById('customer-city');
  const addressInput = document.getElementById('customer-address');
  const paymentSelect = document.getElementById('payment-method');
  const notesInput = document.getElementById('customer-notes');
  const formAlert = document.getElementById('checkout-form-alert');
  const submitBtn = document.getElementById('checkout-submit-btn');
  const btnIcon = document.getElementById('checkout-btn-icon');
  const btnSpinner = document.getElementById('checkout-btn-spinner');
  const btnText = document.getElementById('checkout-btn-text');

  const errorName = document.getElementById('error-customer-name');
  const errorPhone = document.getElementById('error-customer-phone');
  const errorCity = document.getElementById('error-customer-city');
  const errorAddress = document.getElementById('error-customer-address');

  if (formAlert) {
    formAlert.classList.add('hidden');
    formAlert.textContent = '';
  }

  // 1. Validar que el carrito no este vacio
  if (!STATE.cart || STATE.cart.length === 0) {
    if (formAlert) {
      formAlert.textContent = 'Tu carrito esta vacio. Por favor agrega productos del catalogo antes de enviar la orden.';
      formAlert.classList.remove('hidden');
    }
    showToast('El carrito de compras esta vacio.', 'warning');
    return;
  }

  // 2. Obtener valores
  const customerName = nameInput ? nameInput.value.trim() : '';
  const customerPhone = phoneInput ? phoneInput.value.trim() : '';
  const customerCity = cityInput ? cityInput.value.trim() : '';
  const customerAddress = addressInput ? addressInput.value.trim() : '';
  const deliveryType = document.querySelector('input[name="shipping_method"]:checked')?.value || 'Delivery en Barquisimeto';
  const paymentMethod = paymentSelect ? paymentSelect.value : 'Pago Movil (Tasa Oficial)';
  const customerNotes = notesInput ? notesInput.value.trim() : '';

  // 3. Ejecutar validaciones en cada campo
  const resName = CHECKOUT_VALIDATORS.name(customerName);
  const resPhone = CHECKOUT_VALIDATORS.phone(customerPhone);
  const resCity = CHECKOUT_VALIDATORS.city(customerCity);
  const resAddress = CHECKOUT_VALIDATORS.address(customerAddress, deliveryType);

  setFieldValidationState(nameInput, errorName, resName);
  setFieldValidationState(phoneInput, errorPhone, resPhone);
  setFieldValidationState(cityInput, errorCity, resCity);
  setFieldValidationState(addressInput, errorAddress, resAddress);

  if (!resName.valid || !resPhone.valid || !resCity.valid || !resAddress.valid) {
    if (formAlert) {
      formAlert.textContent = 'Por favor corrige los campos marcados en rojo antes de continuar con tu pedido.';
      formAlert.classList.remove('hidden');
    }
    showToast('Por favor completa los campos requeridos correctamente.', 'warning');
    
    // Enfocar primer campo invalido
    if (!resName.valid && nameInput) nameInput.focus();
    else if (!resPhone.valid && phoneInput) phoneInput.focus();
    else if (!resCity.valid && cityInput) cityInput.focus();
    else if (!resAddress.valid && addressInput) addressInput.focus();
    return;
  }

  function resetSubmitBtn() {
    if (submitBtn) {
      submitBtn.disabled = false;
      if (btnIcon) btnIcon.classList.remove('hidden');
      if (btnSpinner) btnSpinner.classList.add('hidden');
      if (btnText) btnText.textContent = 'Enviar Lista de Pedido a WhatsApp';
    }
  }

  // 4. Activar estado de carga en el boton
  if (submitBtn) {
    submitBtn.disabled = true;
    if (btnIcon) btnIcon.classList.add('hidden');
    if (btnSpinner) btnSpinner.classList.remove('hidden');
    if (btnText) btnText.textContent = 'Generando orden...';
  }

  const payload = {
    name: customerName,
    phone: customerPhone,
    city: customerCity,
    address: customerAddress,
    deliveryMethod: deliveryType,
    paymentMethod: paymentMethod,
    notes: customerNotes,
    items: STATE.cart,
    rate: STATE.exchangeRate
  };

  let targetWaUrl = '';

  try {
    const res = await fetch(getApiUrl('/api/order/whatsapp'), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    const result = await res.json();

    if (res.status === 422) {
      // Manejar errores de validacion del servidor
      if (result.errors) {
        if (result.errors.name) setFieldValidationState(nameInput, errorName, { valid: false, message: result.errors.name });
        if (result.errors.phone) setFieldValidationState(phoneInput, errorPhone, { valid: false, message: result.errors.phone });
        if (result.errors.city) setFieldValidationState(cityInput, errorCity, { valid: false, message: result.errors.city });
        if (result.errors.address) setFieldValidationState(addressInput, errorAddress, { valid: false, message: result.errors.address });
      }
      if (formAlert) {
        formAlert.textContent = result.message || 'Error de validacion en el servidor.';
        formAlert.classList.remove('hidden');
      }
      showToast('Revisa los datos del formulario.', 'warning');
      resetSubmitBtn();
      return;
    }

    if (res.ok && result.status === 'success' && result.data?.whatsAppUrl) {
      targetWaUrl = result.data.whatsAppUrl;
    }
  } catch (err) {
    console.info('Backend API request skipped, using client-side list generator.', err);
  }

  // Generador local en formato de lista para atencion al cliente sin emojis
  if (!targetWaUrl) {
    const totals = calculateCartTotals();
    let msg = `*HOLA RM NAILS BOUTIQUE, DESEO CONFIRMAR EL SIGUIENTE PEDIDO:*\n\n`;
    msg += `*LISTA DE PRODUCTOS SELECCIONADOS:*\n`;

    STATE.cart.forEach((item, index) => {
      const lineTotal = (item.priceUsd * item.quantity).toFixed(2);
      msg += `${index + 1}. *${item.quantity}x* ${item.name} ($${item.priceUsd.toFixed(2)} c/u) = *${lineTotal}*\n`;
    });

    msg += `\n*RESUMEN DEL PEDIDO:*\n`;
    msg += `- Subtotal: $${totals.subtotalUsd.toFixed(2)} USD\n`;
    msg += `- Costo de Envio/Delivery: $${totals.shippingCostUsd.toFixed(2)} USD\n`;
    msg += `- Total General: *$${totals.totalUsd.toFixed(2)} USD* / *Bs. ${totals.totalVes.toLocaleString('es-VE', { minimumFractionDigits: 2 })}*\n`;
    msg += `(Tasa calculada: Bs. ${STATE.exchangeRate.toFixed(2)})\n\n`;

    msg += `*DATOS DE LA CLIENTA:*\n`;
    msg += `- Nombre: ${customerName}\n`;
    msg += `- Telefono: ${customerPhone}\n`;
    msg += `- Ciudad: ${customerCity}\n`;
    if (customerAddress) msg += `- Direccion / Salon: ${customerAddress}\n`;
    msg += `- Metodo de Entrega: ${deliveryType}\n`;
    msg += `- Metodo de Pago: ${paymentMethod}\n`;
    if (customerNotes) msg += `- Consulta o Notas: ${customerNotes}\n`;
    msg += `\nNota: Pedido generado desde la tienda web oficial RM Nails Boutique. Consultando disponibilidad.`;

    targetWaUrl = `https://wa.me/584120549526?text=${encodeURIComponent(msg)}`;
  }

  resetSubmitBtn();
  closeCheckoutModal();
  showToast('Abriendo WhatsApp oficial para atender tu orden...', 'success');

  setTimeout(() => {
    window.open(targetWaUrl, '_blank');
  }, 500);
}

// Consulta de producto individual sin emojis
function buyDirectWhatsApp(productId) {
  const prod = PRODUCTS.find(p => p.id === productId);
  if (!prod) return;

  const bsTotal = (prod.priceUsd * STATE.exchangeRate).toLocaleString('es-VE', { minimumFractionDigits: 2 });
  
  let msg = `Hola RM Nails Boutique, deseo consultar disponibilidad inmediata de este producto que vi en la tienda web:\n\n`;
  msg += `Producto: ${prod.name}\n`;
  msg += `Precio: $${prod.priceUsd.toFixed(2)} USD / Bs. ${bsTotal}\n`;
  msg += `Categoria: ${prod.categoryName}\n\n`;
  msg += `Por favor confirmarme disponibilidad para entrega en Barquisimeto o envio nacional. Gracias.`;

  const waUrl = `https://wa.me/584120549526?text=${encodeURIComponent(msg)}`;
  window.open(waUrl, '_blank');
}

// Consulta general sin emojis
function openGeneralWhatsApp() {
  const msg = `Hola RM Nails Boutique, me gustaria solicitar asesoria y consultar disponibilidad de insumos profesionales para mi salon de belleza.`;
  window.open(`https://wa.me/584120549526?text=${encodeURIComponent(msg)}`, '_blank');
}

function toggleCurrency() {
  STATE.currency = STATE.currency === 'USD' ? 'VES' : 'USD';
  localStorage.setItem('rm_currency', STATE.currency);
  updateCurrencyDisplay();
  renderProducts();
  renderCartDrawer();
  showToast(`Moneda cambiada a ${STATE.currency === 'USD' ? 'Dolares ($)' : 'Bolivares (Bs.)'}`, 'info');
}

function updateCurrencyDisplay() {
  if (elements.currentCurrencyLabel) {
    elements.currentCurrencyLabel.textContent = STATE.currency === 'USD' ? 'USD ($)' : 'VES (Bs.)';
  }
  if (elements.currentRateLabel) {
    elements.currentRateLabel.textContent = `Tasa Oficial: Bs. ${STATE.exchangeRate.toFixed(2)}`;
  }
  if (elements.rateFrozenBadge) {
    if (STATE.isRateFrozen) {
      elements.rateFrozenBadge.classList.remove('hidden');
    } else {
      elements.rateFrozenBadge.classList.add('hidden');
    }
  }
}

function openRateModal() {
  if (elements.customRateInput) {
    elements.customRateInput.value = STATE.exchangeRate.toFixed(2);
  }
  elements.rateModal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeRateModal() {
  elements.rateModal.classList.remove('active');
  document.body.style.overflow = '';
}

function saveCustomRate() {
  const newRate = parseFloat(elements.customRateInput.value);
  if (newRate && newRate > 0) {
    STATE.exchangeRate = newRate;
    STATE.isRateFrozen = true;
    localStorage.setItem('rm_frozen_rate', newRate);
    updateCurrencyDisplay();
    renderProducts();
    renderCartDrawer();
    closeRateModal();
    showToast(`Tasa congelada guardada en Bs. ${newRate.toFixed(2)} por USD`, 'success');
  } else {
    showToast('Ingresa un valor de tasa valido.', 'warning');
  }
}

function setCategory(cat) {
  STATE.category = cat;
  elements.categoryPills.forEach(pill => {
    if (pill.dataset.category === cat) {
      pill.classList.add('active');
    } else {
      pill.classList.remove('active');
    }
  });
  renderProducts();
}

// Boton Mostrar Todo el Catalogo
function resetFilters() {
  STATE.category = 'all';
  STATE.searchQuery = '';
  STATE.sortBy = 'featured';
  if (elements.searchInput) elements.searchInput.value = '';
  if (elements.mobileSearchInput) elements.mobileSearchInput.value = '';
  if (elements.sortSelect) elements.sortSelect.value = 'featured';
  elements.categoryPills.forEach(pill => {
    if (pill.dataset.category === 'all') pill.classList.add('active');
    else pill.classList.remove('active');
  });
  renderProducts();

  // Scroll suave al catalogo
  const catalogoElem = document.getElementById('catalogo');
  if (catalogoElem) {
    catalogoElem.scrollIntoView({ behavior: 'smooth' });
  }
}

// Toasts de notificacion con iconos SVG limpios (sin emojis)
function showToast(message, type = 'info') {
  const container = document.getElementById('toast-container');
  if (!container) return;

  const toast = document.createElement('div');
  toast.className = 'toast';

  let borderColor = '#E57399';
  let svgIcon = `
    <svg class="w-5 h-5 text-pink-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
  `;

  if (type === 'success') {
    borderColor = '#10B981';
    svgIcon = `
      <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
      </svg>
    `;
  } else if (type === 'warning') {
    borderColor = '#F59E0B';
    svgIcon = `
      <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
      </svg>
    `;
  }

  toast.style.borderLeftColor = borderColor;
  toast.innerHTML = `
    ${svgIcon}
    <span class="text-xs font-medium text-gray-800">${message}</span>
  `;

  container.appendChild(toast);

  setTimeout(() => {
    toast.classList.add('hiding');
    setTimeout(() => toast.remove(), 300);
  }, 3200);
}

function toggleMobileMenu() {
  const drawer = elements.mobileMenuDrawer;
  const backdrop = elements.mobileMenuBackdrop;
  if (!drawer || !backdrop) return;

  const isOpen = drawer.classList.contains('active');
  if (isOpen) {
    drawer.classList.remove('active');
    backdrop.classList.remove('active');
    document.body.style.overflow = '';
  } else {
    drawer.classList.add('active');
    backdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

// Inicializacion al cargar el DOM
document.addEventListener('DOMContentLoaded', () => {
  loadPersistedState();
  initElements();
  fetchOfficialRate();
  updateCurrencyDisplay();
  updateCartCounters();
  renderCartDrawer();
  renderProducts();

  const handleSearchInput = (val) => {
    STATE.searchQuery = val;
    if (elements.searchInput && elements.searchInput.value !== val) {
      elements.searchInput.value = val;
    }
    if (elements.mobileSearchInput && elements.mobileSearchInput.value !== val) {
      elements.mobileSearchInput.value = val;
    }
    renderProducts();
  };

  if (elements.searchInput) {
    let timeout = null;
    elements.searchInput.addEventListener('input', (e) => {
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        handleSearchInput(e.target.value);
      }, 250);
    });
  }

  if (elements.mobileSearchInput) {
    let timeoutMobile = null;
    elements.mobileSearchInput.addEventListener('input', (e) => {
      clearTimeout(timeoutMobile);
      timeoutMobile = setTimeout(() => {
        handleSearchInput(e.target.value);
      }, 250);
    });
  }

  if (elements.sortSelect) {
    elements.sortSelect.addEventListener('change', (e) => {
      STATE.sortBy = e.target.value;
      renderProducts();
    });
  }

  elements.categoryPills.forEach(pill => {
    pill.addEventListener('click', () => {
      setCategory(pill.dataset.category);
    });
  });

  document.querySelectorAll('input[name="drawer_delivery"]').forEach(radio => {
    radio.addEventListener('change', (e) => {
      STATE.deliveryMethod = e.target.value;
      renderCartDrawer();
    });
  });

  if (elements.checkoutForm) {
    elements.checkoutForm.addEventListener('submit', handleCheckoutSubmit);

    const nameInput = document.getElementById('customer-name');
    const phoneInput = document.getElementById('customer-phone');
    const cityInput = document.getElementById('customer-city');
    const addressInput = document.getElementById('customer-address');
    const errorName = document.getElementById('error-customer-name');
    const errorPhone = document.getElementById('error-customer-phone');
    const errorCity = document.getElementById('error-customer-city');
    const errorAddress = document.getElementById('error-customer-address');

    // 1. Nombre Completo: Bloqueo de numeros en keydown + sanitizacion en input
    if (nameInput) {
      nameInput.addEventListener('keydown', (e) => {
        // Bloquear teclas numericas directamente
        if (e.key && e.key.length === 1 && /[0-9]/.test(e.key) && !e.ctrlKey && !e.metaKey) {
          e.preventDefault();
          setFieldValidationState(nameInput, errorName, {
            valid: false,
            message: 'No se permiten numeros en el nombre.'
          });
        }
      });

      nameInput.addEventListener('input', () => {
        // Sanitizar si se pegan numeros
        if (/[0-9]/.test(nameInput.value)) {
          nameInput.value = nameInput.value.replace(/[0-9]/g, '');
          setFieldValidationState(nameInput, errorName, {
            valid: false,
            message: 'El nombre solo puede contener letras (no se permiten numeros).'
          });
          return;
        }

        if (!nameInput.value.trim()) {
          clearFieldValidationState(nameInput, errorName);
          return;
        }

        const res = CHECKOUT_VALIDATORS.name(nameInput.value);
        setFieldValidationState(nameInput, errorName, res);
      });

      nameInput.addEventListener('blur', () => {
        const res = CHECKOUT_VALIDATORS.name(nameInput.value);
        setFieldValidationState(nameInput, errorName, res);
      });
    }

    // 2. Telefono / WhatsApp: Bloqueo de letras en keydown + sanitizacion en input
    if (phoneInput) {
      phoneInput.addEventListener('keydown', (e) => {
        // Bloquear letras directamente
        if (e.key && e.key.length === 1 && !/[\d\s\+\-()]/.test(e.key) && !e.ctrlKey && !e.metaKey) {
          e.preventDefault();
          setFieldValidationState(phoneInput, errorPhone, {
            valid: false,
            message: 'Solo se permiten numeros en el telefono (no se permiten letras).'
          });
        }
      });

      phoneInput.addEventListener('input', () => {
        // Sanitizar si se pegan letras
        const sanitized = phoneInput.value.replace(/[^\d\s\+\-()]/g, '');
        if (sanitized !== phoneInput.value) {
          phoneInput.value = sanitized;
          setFieldValidationState(phoneInput, errorPhone, {
            valid: false,
            message: 'Solo se permiten numeros en el telefono (no se permiten letras).'
          });
          return;
        }

        if (!phoneInput.value.trim()) {
          clearFieldValidationState(phoneInput, errorPhone);
          return;
        }

        const res = CHECKOUT_VALIDATORS.phone(phoneInput.value);
        setFieldValidationState(phoneInput, errorPhone, res);
      });

      phoneInput.addEventListener('blur', () => {
        const res = CHECKOUT_VALIDATORS.phone(phoneInput.value);
        setFieldValidationState(phoneInput, errorPhone, res);
      });
    }

    // 3. Ciudad / Estado: Bloqueo de numeros en keydown + sanitizacion en input
    if (cityInput) {
      cityInput.addEventListener('keydown', (e) => {
        if (e.key && e.key.length === 1 && /[0-9]/.test(e.key) && !e.ctrlKey && !e.metaKey) {
          e.preventDefault();
          setFieldValidationState(cityInput, errorCity, {
            valid: false,
            message: 'No se permiten numeros en la ciudad o estado.'
          });
        }
      });

      cityInput.addEventListener('input', () => {
        if (/[0-9]/.test(cityInput.value)) {
          cityInput.value = cityInput.value.replace(/[0-9]/g, '');
          setFieldValidationState(cityInput, errorCity, {
            valid: false,
            message: 'La ciudad solo puede contener letras.'
          });
          return;
        }

        if (!cityInput.value.trim()) {
          clearFieldValidationState(cityInput, errorCity);
          return;
        }

        const res = CHECKOUT_VALIDATORS.city(cityInput.value);
        setFieldValidationState(cityInput, errorCity, res);
      });

      cityInput.addEventListener('blur', () => {
        const res = CHECKOUT_VALIDATORS.city(cityInput.value);
        setFieldValidationState(cityInput, errorCity, res);
      });
    }

    // 4. Direccion / Salon: Validacion en input y blur
    if (addressInput) {
      addressInput.addEventListener('input', () => {
        const deliveryType = document.querySelector('input[name="shipping_method"]:checked')?.value || 'Delivery en Barquisimeto';
        if (!addressInput.value.trim() && deliveryType === 'Retiro en Tienda Barquisimeto') {
          clearFieldValidationState(addressInput, errorAddress);
          return;
        }
        const res = CHECKOUT_VALIDATORS.address(addressInput.value, deliveryType);
        setFieldValidationState(addressInput, errorAddress, res);
      });

      addressInput.addEventListener('blur', () => {
        const deliveryType = document.querySelector('input[name="shipping_method"]:checked')?.value || 'Delivery en Barquisimeto';
        const res = CHECKOUT_VALIDATORS.address(addressInput.value, deliveryType);
        setFieldValidationState(addressInput, errorAddress, res);
      });
    }

    document.querySelectorAll('input[name="shipping_method"]').forEach(radio => {
      radio.addEventListener('change', () => {
        updateCheckoutAddressRequirement();
        if (addressInput && addressInput.value.trim()) {
          const deliveryType = radio.value;
          const res = CHECKOUT_VALIDATORS.address(addressInput.value, deliveryType);
          setFieldValidationState(addressInput, errorAddress, res);
        }
      });
    });

    updateCheckoutAddressRequirement();
  }
});

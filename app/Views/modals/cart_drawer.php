<!-- =========================================================================
     CART DRAWER (Slide-Over lateral del Carrito)
     ========================================================================= -->
<div id="cart-drawer-backdrop" onclick="closeCartDrawer()" class="drawer-backdrop fixed inset-0 bg-black/60 z-50 backdrop-blur-sm"></div>
<aside id="cart-drawer" class="drawer-content fixed top-0 right-0 bottom-0 w-full max-w-md bg-white shadow-2xl z-50 flex flex-col justify-between">
  
  <!-- Drawer Header -->
  <div class="p-5 border-b border-pink-100 flex items-center justify-between bg-[#FFF1F5]">
    <div class="flex items-center gap-2">
      <div class="w-8 h-8 rounded-full bg-[#E57399] text-white flex items-center justify-center font-serif font-bold text-xs">
        RM
      </div>
      <div>
        <h3 class="font-serif font-bold text-base text-gray-900">Tu Carrito de Compras</h3>
        <p class="text-[10px] text-pink-600 font-medium">Revisa tus insumos seleccionados</p>
      </div>
    </div>
    <button onclick="closeCartDrawer()" class="text-gray-400 hover:text-gray-700 p-1.5 rounded-lg hover:bg-white/80 transition-colors">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
  </div>

  <!-- Free Delivery Progress Bar -->
  <div class="bg-pink-50/70 px-5 py-3 border-b border-pink-100">
    <div id="free-delivery-text" class="text-xs text-gray-700 mb-1.5 font-medium">
      Calculando delivery...
    </div>
    <div class="w-full bg-pink-200/60 rounded-full h-1.5 overflow-hidden">
      <div id="free-delivery-progress" class="bg-[#E57399] h-1.5 rounded-full transition-all duration-300" style="width: 0%;"></div>
    </div>
  </div>

  <!-- Drawer Body / Item List -->
  <div class="flex-grow overflow-y-auto p-5">
    <!-- Empty state -->
    <div id="cart-empty-state" class="text-center py-12">
      <div class="w-16 h-16 mx-auto mb-4 bg-pink-50 text-pink-300 rounded-full flex items-center justify-center text-3xl">
        🛍️
      </div>
      <h4 class="font-serif font-bold text-gray-800 text-base mb-1">Tu carrito está vacío</h4>
      <p class="text-xs text-gray-500 mb-6 max-w-xs mx-auto">Explora nuestro catálogo y agrega los insumos que necesitas para tu salón.</p>
      <button onclick="closeCartDrawer()" class="btn-primary-boutique px-6 py-2.5 rounded-full text-xs font-semibold">
        Explorar Productos
      </button>
    </div>

    <!-- Items Container -->
    <div id="cart-items-list" class="space-y-1"></div>
  </div>

  <!-- Drawer Footer / Checkout Actions -->
  <div id="cart-checkout-footer" class="p-5 border-t border-pink-100 bg-white">
    <!-- Shipping Method Selector in Drawer -->
    <div class="mb-4 bg-[#FCF8F9] p-3 rounded-xl border border-pink-100 text-xs">
      <span class="font-bold text-gray-800 block mb-2 text-[11px] uppercase tracking-wider">Método de Entrega:</span>
      <div class="space-y-1.5">
        <label class="flex items-center justify-between cursor-pointer">
          <span class="flex items-center gap-2">
            <input type="radio" name="drawer_delivery" value="delivery-bqto" checked class="text-pink-600 focus:ring-pink-500" />
            <span>🛵 Delivery en Barquisimeto</span>
          </span>
          <span class="text-gray-500 text-[11px]">$2.50 (Gratis > $35)</span>
        </label>
        <label class="flex items-center justify-between cursor-pointer">
          <span class="flex items-center gap-2">
            <input type="radio" name="drawer_delivery" value="tienda-bqto" class="text-pink-600 focus:ring-pink-500" />
            <span>📍 Retiro en Tienda (Barquisimeto)</span>
          </span>
          <span class="text-emerald-600 font-bold text-[11px]">Gratis</span>
        </label>
        <label class="flex items-center justify-between cursor-pointer">
          <span class="flex items-center gap-2">
            <input type="radio" name="drawer_delivery" value="nacional-vzla" class="text-pink-600 focus:ring-pink-500" />
            <span>🇻🇪 Envío Nacional (MRW/Zoom/Tealca)</span>
          </span>
          <span class="text-gray-500 text-[11px]">Cobro en Destino</span>
        </label>
      </div>
    </div>

    <!-- Totals Breakdown -->
    <div class="space-y-1.5 text-xs mb-4">
      <div class="flex justify-between text-gray-500">
        <span>Subtotal:</span>
        <div>
          <span id="cart-subtotal-usd" class="font-semibold text-gray-800">$0.00</span>
          <span id="cart-subtotal-ves" class="text-[10px] text-gray-400 block text-right">Bs. 0.00</span>
        </div>
      </div>
      <div class="flex justify-between text-gray-500">
        <span>Envío estimado:</span>
        <span id="cart-shipping-text" class="font-semibold text-gray-800">$2.50</span>
      </div>
      <div class="flex justify-between items-baseline pt-2 border-t border-pink-100 font-bold text-gray-900 text-sm">
        <span>TOTAL ESTIMADO:</span>
        <div class="text-right">
          <span id="cart-total-usd" class="text-lg text-pink-700 font-serif">$0.00</span>
          <span id="cart-total-ves" class="text-xs text-gray-500 font-normal block">Bs. 0.00</span>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="space-y-2">
      <button 
        onclick="openCheckoutModal()"
        class="w-full btn-primary-boutique py-3.5 rounded-xl text-xs font-bold flex items-center justify-center gap-2 shadow-md"
      >
        <span>Continuar y Ordenar por WhatsApp</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
      </button>

      <button 
        onclick="clearCart()" 
        class="w-full py-1 text-center text-[11px] text-gray-400 hover:text-red-500 transition-colors"
      >
        Vaciar carrito
      </button>
    </div>
  </div>
</aside>

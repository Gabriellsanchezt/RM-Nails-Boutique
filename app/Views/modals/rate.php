<!-- =========================================================================
     CUSTOM RATE MODAL (Ajustar Tasa Oficial / BCV)
     ========================================================================= -->
<div id="rate-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="modal-container bg-white rounded-3xl max-w-sm w-full p-6 shadow-2xl border border-pink-100 text-center">
    <div class="w-12 h-12 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center mx-auto mb-3 text-xl">
      💱
    </div>
    <h4 class="font-serif font-bold text-gray-900 text-base mb-1">Ajustar Tasa de Cambio</h4>
    <p class="text-xs text-gray-500 mb-4">Configura la tasa de Bolívares por Dólar (USD) para recalcular los precios en todo el catálogo:</p>
    <div class="flex items-center gap-2 mb-4 justify-center">
      <span class="text-xs font-bold text-gray-500">1 USD = Bs.</span>
      <input 
        id="custom-rate-input" 
        type="number" 
        step="0.01" 
        value="<?= htmlspecialchars($exchangeRate ?? '46.50') ?>"
        class="w-28 text-center bg-pink-50 border border-pink-200 rounded-xl py-2 font-bold text-sm text-gray-900 focus:outline-none focus:border-pink-500" 
      />
    </div>
    <div class="grid grid-cols-2 gap-2">
      <button onclick="closeRateModal()" class="py-2.5 rounded-xl border border-gray-200 text-xs font-semibold text-gray-600 hover:bg-gray-50">
        Cancelar
      </button>
      <button onclick="saveCustomRate()" class="btn-primary-boutique py-2.5 rounded-xl text-xs font-bold">
        Actualizar Tasa
      </button>
    </div>
  </div>
</div>

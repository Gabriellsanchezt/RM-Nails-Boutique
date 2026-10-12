<!-- Modal de Tasa de Cambio Oficial (BCV) -->
<div id="rate-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4">
  <div class="modal-container bg-white rounded-2xl sm:rounded-3xl max-w-sm w-full p-5 sm:p-6 shadow-2xl border border-pink-100 text-center max-h-[92vh] overflow-y-auto">
    <div class="w-12 h-12 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center mx-auto mb-3">
      <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
      </svg>
    </div>
    <h4 class="font-serif font-bold text-gray-900 text-base mb-1">Tasa de Cambio Oficial</h4>
    <p class="text-xs text-gray-500 mb-4">
      Esta tasa se actualiza automaticamente via API oficial (BCV). Si hay problemas de conexion, se mantiene congelada en la ultima tasa valida:
    </p>
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
        Cerrar
      </button>
      <button onclick="saveCustomRate()" class="btn-primary-boutique py-2.5 rounded-xl text-xs font-bold">
        Guardar Tasa
      </button>
    </div>
  </div>
</div>

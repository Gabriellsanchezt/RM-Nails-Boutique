<!-- =========================================================================
     QUICK VIEW MODAL
     ========================================================================= -->
<div id="quickview-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4">
  <div class="modal-container bg-white rounded-2xl sm:rounded-3xl max-w-2xl w-full max-h-[92vh] overflow-y-auto shadow-2xl border border-pink-100 relative">
    <button onclick="closeQuickView()" class="absolute top-3 right-3 sm:top-4 sm:right-4 text-gray-400 hover:text-gray-700 bg-white/90 p-2 rounded-full z-20 shadow-sm transition-colors" aria-label="Cerrar vista rapida">
      <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    <div id="quickview-content"></div>
  </div>
</div>

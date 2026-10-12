<!-- =========================================================================
     QUICK VIEW MODAL
     ========================================================================= -->
<div id="quickview-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="modal-container bg-white rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl border border-pink-100 relative">
    <button onclick="closeQuickView()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 bg-white/80 p-2 rounded-full z-20 shadow-sm">
      ✕
    </button>
    <div id="quickview-content"></div>
  </div>
</div>

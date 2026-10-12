<!-- =========================================================================
     WISHLIST MODAL
     ========================================================================= -->
<div id="wishlist-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="modal-container bg-white rounded-3xl max-w-md w-full overflow-hidden shadow-2xl border border-pink-100 p-6">
    <div class="flex items-center justify-between pb-3 border-b border-pink-100 mb-4">
      <h4 class="font-serif font-bold text-gray-900 text-base">Tus Favoritos ❤️</h4>
      <button onclick="closeWishlistModal()" class="text-gray-400 hover:text-gray-700">✕</button>
    </div>

    <div id="wishlist-empty-state" class="text-center py-8">
      <div class="text-3xl mb-2">🤍</div>
      <p class="text-xs text-gray-500">Aún no has guardado productos en favoritos.</p>
    </div>

    <div id="wishlist-items-list" class="space-y-2 max-h-80 overflow-y-auto"></div>
  </div>
</div>

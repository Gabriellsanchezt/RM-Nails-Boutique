<!-- Wishlist Modal -->
<div id="wishlist-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="modal-container bg-white rounded-3xl max-w-md w-full overflow-hidden shadow-2xl border border-pink-100 p-6">
    <div class="flex items-center justify-between pb-3 border-b border-pink-100 mb-4">
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-600 fill-current" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
        </svg>
        <h4 class="font-serif font-bold text-gray-900 text-base">Tus Favoritos</h4>
      </div>
      <button onclick="closeWishlistModal()" class="text-gray-400 hover:text-gray-700">✕</button>
    </div>

    <div id="wishlist-empty-state" class="text-center py-8">
      <div class="w-12 h-12 mx-auto mb-2 bg-pink-50 rounded-full flex items-center justify-center text-pink-400">
        <svg class="w-6 h-6 fill-none stroke-current" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
        </svg>
      </div>
      <p class="text-xs text-gray-500">Aun no has guardado insumos en tus favoritos.</p>
    </div>

    <div id="wishlist-items-list" class="space-y-2 max-h-80 overflow-y-auto"></div>
  </div>
</div>

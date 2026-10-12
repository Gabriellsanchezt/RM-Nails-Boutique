<!-- Seccion Instagram Comunidad (@rmnailsboutique) -->
<section class="py-12 bg-white border-t border-pink-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <span class="text-xs font-bold uppercase tracking-wider text-pink-600 block mb-1">
      Comunidad Oficial
    </span>
    <h3 class="font-serif font-bold text-2xl text-gray-900 mb-2">
      Siguenos en Instagram <a href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" target="_blank" rel="noopener noreferrer" class="text-pink-600 hover:underline">@<?= htmlspecialchars($instagram['handle'] ?? 'rmnailsboutique') ?></a>
    </h3>
    <p class="text-xs text-gray-500 mb-8 max-w-lg mx-auto">
      Descubre demostraciones, novedades de insumos para unas, cejas y pestanas en nuestra cuenta oficial.
    </p>

    <!-- Visual Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
      <a href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" target="_blank" class="group relative rounded-2xl overflow-hidden aspect-square bg-pink-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&w=500&q=80" alt="Nail Art" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
        <div class="absolute inset-0 bg-pink-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white font-bold text-xs">
          Ver en Instagram
        </div>
      </a>

      <a href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" target="_blank" class="group relative rounded-2xl overflow-hidden aspect-square bg-pink-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=500&q=80" alt="Brows & Lashes" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
        <div class="absolute inset-0 bg-pink-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white font-bold text-xs">
          Ver en Instagram
        </div>
      </a>

      <a href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" target="_blank" class="group relative rounded-2xl overflow-hidden aspect-square bg-pink-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1608248597359-50953a393fb6?auto=format&fit=crop&w=500&q=80" alt="Cuticle oils" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
        <div class="absolute inset-0 bg-pink-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white font-bold text-xs">
          Ver en Instagram
        </div>
      </a>

      <a href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" target="_blank" class="group relative rounded-2xl overflow-hidden aspect-square bg-pink-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=500&q=80" alt="Brushes & Acrylic" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
        <div class="absolute inset-0 bg-pink-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white font-bold text-xs">
          Ver en Instagram
        </div>
      </a>
    </div>

    <a 
      href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" 
      target="_blank" 
      rel="noopener noreferrer" 
      class="inline-flex items-center gap-2 btn-outline-boutique px-6 py-2.5 rounded-full text-xs font-bold"
    >
      <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
      </svg>
      <span>Seguir @<?= htmlspecialchars($instagram['handle'] ?? 'rmnailsboutique') ?> en Instagram</span>
    </a>
  </div>
</section>

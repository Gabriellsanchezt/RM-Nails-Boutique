<!-- =========================================================================
     9. FOOTER / PIE DE PÁGINA PROFESIONAL
     ========================================================================= -->
<footer class="bg-[#1F191E] text-white pt-16 pb-10 border-t border-pink-900/40">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
      
      <!-- Col 1: Brand & Concept -->
      <div class="lg:col-span-2">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-[#E57399] to-[#D4AF37] p-0.5">
            <div class="w-full h-full bg-[#1F191E] rounded-[10px] flex items-center justify-center">
              <span class="font-serif font-black text-lg text-[#E57399]">RM</span>
            </div>
          </div>
          <div>
            <span class="font-serif font-bold text-lg text-white block"><?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?></span>
            <span class="text-[10px] text-pink-300 uppercase tracking-widest"><?= htmlspecialchars($slogan ?? 'La boutique de las uñas') ?></span>
          </div>
        </div>
        <p class="text-xs text-gray-400 leading-relaxed mb-6 max-w-sm">
          Especialistas en la distribución de insumos profesionales de alta calidad para manicuristas, lashistas y diseñadoras de cejas. Envíos garantizados a toda Venezuela y atención cálida e inmediata.
        </p>
        <div class="flex items-center gap-3">
          <a href="<?= htmlspecialchars($instagram['url'] ?? 'https://www.instagram.com/rmnailsboutique/') ?>" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-[#E57399] text-white flex items-center justify-center transition-colors">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="https://wa.me/<?= htmlspecialchars($whatsApp ?? '584120549526') ?>" target="_blank" class="w-9 h-9 rounded-full bg-white/10 hover:bg-emerald-500 text-white flex items-center justify-center transition-colors">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/></svg>
          </a>
        </div>
      </div>

      <!-- Col 2: Categorías -->
      <div>
        <h4 class="text-sm font-bold text-white mb-4 uppercase tracking-wider text-[#E57399]">Categorías</h4>
        <ul class="space-y-2 text-xs text-gray-400">
          <li><a href="#catalogo" onclick="setCategory('unas')" class="hover:text-white transition-colors">Uñas & Manicura</a></li>
          <li><a href="#catalogo" onclick="setCategory('cejas-pestanas')" class="hover:text-white transition-colors">Cejas & Pestañas</a></li>
          <li><a href="#catalogo" onclick="setCategory('cuidado-herramientas')" class="hover:text-white transition-colors">Cuidado & Sanitización</a></li>
          <li><a href="#catalogo" onclick="setCategory('combos')" class="hover:text-white transition-colors">Kits de Inicio</a></li>
          <li><a href="#catalogo" onclick="resetFilters()" class="hover:text-white transition-colors">Ver Todo el Inventario</a></li>
        </ul>
      </div>

      <!-- Col 3: Ubicación y Horarios -->
      <div>
        <h4 class="text-sm font-bold text-white mb-4 uppercase tracking-wider text-[#D4AF37]">Ubicación & Envíos</h4>
        <ul class="space-y-2 text-xs text-gray-400 leading-relaxed">
          <li class="flex items-start gap-2">
            <span>📍</span> <span>Barquisimeto, Estado Lara, Venezuela.</span>
          </li>
          <li class="flex items-start gap-2">
            <span>🛵</span> <span>Delivery Express en Bqto & Cabudare.</span>
          </li>
          <li class="flex items-start gap-2">
            <span>📦</span> <span>Envíos Nacionales: MRW, Tealca, Zoom, Domesa.</span>
          </li>
          <li class="flex items-start gap-2">
            <span>🕒</span> <span>Lunes a Sábado: 8:30 AM - 6:00 PM</span>
          </li>
        </ul>
      </div>

      <!-- Col 4: Métodos de Pago Aceptados -->
      <div>
        <h4 class="text-sm font-bold text-white mb-4 uppercase tracking-wider text-pink-400">Métodos de Pago</h4>
        <p class="text-[11px] text-gray-400 mb-3">Aceptamos transacciones seguras en Bolívares y Divisas:</p>
        <div class="flex flex-wrap gap-1.5 text-[11px] font-semibold">
          <span class="bg-white/10 px-2 py-1 rounded text-white">Pago Móvil</span>
          <span class="bg-white/10 px-2 py-1 rounded text-white">Zelle</span>
          <span class="bg-white/10 px-2 py-1 rounded text-white">Efectivo ($)</span>
          <span class="bg-white/10 px-2 py-1 rounded text-white">Banesco</span>
          <span class="bg-white/10 px-2 py-1 rounded text-white">Mercantil</span>
          <span class="bg-white/10 px-2 py-1 rounded text-white">Binance Pay</span>
        </div>
      </div>

    </div>

    <!-- Footer Bottom Bar -->
    <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
      <div>
        © <?= date('Y') ?> <strong><?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?></strong>. "<?= htmlspecialchars($slogan ?? 'La boutique de las uñas') ?>" - Todos los derechos reservados.
      </div>
      <div class="flex items-center gap-4">
        <a href="https://wa.me/<?= htmlspecialchars($whatsApp ?? '584120549526') ?>" target="_blank" class="hover:text-pink-400 transition-colors">WhatsApp Oficial: +58 412-0549526</a>
      </div>
    </div>
  </div>
</footer>

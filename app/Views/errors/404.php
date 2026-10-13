<?php
/**
 * 404 Error Page - RM Nails Boutique
 * Elegant Boutique Style Not Found Page
 */
?>
<section class="min-h-[70vh] flex items-center justify-center py-16 px-4 bg-[#FCF8F9]">
  <div class="max-w-lg w-full bg-white rounded-3xl p-8 sm:p-10 shadow-2xl border border-pink-200/80 text-center relative overflow-hidden">
    
    <!-- Top accent bar -->
    <div class="h-1.5 w-full bg-gradient-to-r from-[#E57399] via-[#D4AF37] to-[#E57399] absolute top-0 left-0"></div>

    <!-- Boutique Seal / Icon -->
    <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-[#E57399] via-[#F29AB6] to-[#D4AF37] p-1 mx-auto mb-6 shadow-md flex items-center justify-center">
      <div class="w-full h-full rounded-full bg-[#EE8AA4] flex items-center justify-center overflow-hidden">
        <img 
          src="<?= \App\Core\View::asset('assets/images/logo.jpg') ?>" 
          alt="RM Nails Boutique" 
          class="w-full h-full object-cover rounded-full"
        />
      </div>
    </div>

    <!-- 404 Badge -->
    <span class="inline-block bg-pink-100 text-[#C84B75] text-xs font-black uppercase tracking-widest px-3 py-1 rounded-full mb-3">
      Error 404 - Ruta Inexistente
    </span>

    <h1 class="font-serif font-black text-3xl sm:text-4xl text-gray-900 mb-3 leading-tight">
      Pagina no encontrada
    </h1>

    <p class="text-sm text-gray-600 mb-8 leading-relaxed max-w-sm mx-auto">
      Lo sentimos, la seccion o insumo que buscas no se encuentra disponible. Puedes regresar al catalogo principal de nuestra boutique o escribirnos directamente.
    </p>

    <!-- CTAs -->
    <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
      <a 
        href="<?= \App\Core\View::asset('') ?>" 
        class="w-full sm:w-auto btn-primary-boutique py-3 px-6 rounded-xl text-xs sm:text-sm font-bold flex items-center justify-center gap-2 shadow-md"
      >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        <span>Volver a la Tienda</span>
      </a>

      <a 
        href="https://wa.me/584120549526?text=Hola%20RM%20Nails%20Boutique%2C%20estaba%20navegando%20en%20la%20pagina%20web%20y%20necesito%20ayuda%20para%20encontrar%20un%20insumo." 
        target="_blank" 
        rel="noopener noreferrer"
        class="w-full sm:w-auto bg-emerald-500 hover:bg-emerald-600 text-white py-3 px-6 rounded-xl text-xs sm:text-sm font-bold flex items-center justify-center gap-2 shadow-md transition-colors"
      >
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
        </svg>
        <span>Atencion en WhatsApp</span>
      </a>
    </div>

  </div>
</section>

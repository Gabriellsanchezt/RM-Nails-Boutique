<?php
/**
 * 500 Error Page - RM Nails Boutique
 * Elegant Boutique Style Server Error Page
 */
?>
<section class="min-h-[70vh] flex items-center justify-center py-16 px-4 bg-[#FCF8F9]">
  <div class="max-w-lg w-full bg-white rounded-3xl p-8 sm:p-10 shadow-2xl border border-pink-200/80 text-center relative overflow-hidden">
    
    <!-- Top accent bar -->
    <div class="h-1.5 w-full bg-gradient-to-r from-rose-500 via-[#D4AF37] to-[#E57399] absolute top-0 left-0"></div>

    <!-- Boutique Warning Icon -->
    <div class="w-20 h-20 rounded-full bg-rose-50 border border-rose-200 text-rose-500 flex items-center justify-center mx-auto mb-6 shadow-inner ring-4 ring-rose-50/70">
      <svg class="w-10 h-10 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
      </svg>
    </div>

    <!-- 500 Badge -->
    <span class="inline-block bg-rose-100 text-rose-800 text-xs font-black uppercase tracking-widest px-3 py-1 rounded-full mb-3">
      Aviso del Servidor (500)
    </span>

    <h1 class="font-serif font-black text-3xl sm:text-4xl text-gray-900 mb-3 leading-tight">
      Interrupcion Temporal
    </h1>

    <p class="text-sm text-gray-600 mb-8 leading-relaxed max-w-sm mx-auto">
      Ocurrio un problema temporal al procesar tu solicitud. Estamos trabajando para solucionarlo. Si necesitas tus insumos con urgencia, puedes ordenar directamente por WhatsApp.
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
        <span>Volver al Inicio</span>
      </a>

      <a 
        href="https://wa.me/584120549526?text=Hola%20RM%20Nails%20Boutique%2C%20tuve%20un%20inconveniente%20en%20la%20pagina%20web%20y%20deseo%20atencion%20directa%20para%20un%20pedido." 
        target="_blank" 
        rel="noopener noreferrer"
        class="w-full sm:w-auto bg-emerald-500 hover:bg-emerald-600 text-white py-3 px-6 rounded-xl text-xs sm:text-sm font-bold flex items-center justify-center gap-2 shadow-md transition-colors"
      >
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
        </svg>
        <span>Pedir por WhatsApp</span>
      </a>
    </div>

  </div>
</section>

<!-- =========================================================================
     MODAL DE ERROR Y CONTINGENCIA DE CONEXION (RM NAILS BOUTIQUE)
     Disenado para alertar amigablemente si falla la red, la API o el servidor
     ========================================================================= -->
<div id="error-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4">
  <div class="modal-container bg-white rounded-3xl max-w-md w-full p-6 sm:p-7 shadow-2xl border border-pink-100 text-center relative overflow-hidden animate-fade-in">
    
    <!-- Banda decorativa boutique oro/rosa en la parte superior -->
    <div class="h-1.5 w-full bg-gradient-to-r from-[#E57399] via-[#D4AF37] to-[#E57399] absolute top-0 left-0"></div>

    <!-- Boton de cierre superior -->
    <button 
      onclick="closeErrorModal()" 
      class="absolute top-3.5 right-3.5 text-gray-400 hover:text-gray-700 p-1.5 rounded-lg hover:bg-gray-100 transition-colors"
      aria-label="Cerrar aviso de error"
    >
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <!-- Icono de Alerta / Conexion con brillo rosa -->
    <div class="w-16 h-16 rounded-full bg-rose-50 border border-rose-200 text-rose-500 flex items-center justify-center mx-auto mb-3.5 shadow-inner ring-4 ring-rose-50/60">
      <svg id="error-modal-icon" class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
      </svg>
    </div>

    <!-- Etiqueta de estado -->
    <span 
      id="error-modal-badge" 
      class="inline-block bg-rose-100 text-rose-800 text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full mb-2"
    >
      Aviso de Conexion o Respuesta
    </span>

    <!-- Titulo del error -->
    <h4 
      id="error-modal-title" 
      class="font-serif font-bold text-gray-900 text-lg mb-2 leading-snug"
    >
      No pudimos conectar en este momento
    </h4>

    <!-- Mensaje descriptivo con tranquilidad para la cliente -->
    <p 
      id="error-modal-message" 
      class="text-xs text-gray-600 mb-5 leading-relaxed px-1"
    >
      El servidor o la red no respondieron a tiempo. No te preocupes: tu seleccion de insumos sigue a salvo y puedes reintentar o enviar tu pedido directamente a nuestra linea de WhatsApp.
    </p>

    <!-- Botones de Accion -->
    <div class="space-y-2.5">
      <!-- Boton de Reintentar -->
      <button 
        id="error-modal-retry-btn" 
        onclick="retryLastAction()" 
        class="w-full btn-primary-boutique py-3 rounded-xl text-xs sm:text-sm font-bold flex items-center justify-center gap-2 shadow-md transition-all active:scale-95"
      >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
        </svg>
        <span id="error-modal-retry-text">Reintentar Conexion</span>
      </button>

      <!-- Boton de WhatsApp Oficial -->
      <a 
        id="error-modal-whatsapp-btn" 
        href="https://wa.me/584120549526?text=Hola%20RM%20Nails%20Boutique%2C%20tuve%20un%20problema%20de%20conexion%20en%20la%20pagina%20web%20y%20deseo%20hacer%20mi%20pedido%20directamente." 
        target="_blank" 
        rel="noopener noreferrer"
        class="w-full bg-emerald-500 hover:bg-emerald-600 text-white py-3 rounded-xl text-xs sm:text-sm font-bold flex items-center justify-center gap-2 shadow-md transition-colors active:scale-95"
      >
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
        </svg>
        <span>Atencion Inmediata por WhatsApp</span>
      </a>

      <!-- Boton Secundario de Cerrar -->
      <button 
        onclick="closeErrorModal()" 
        class="w-full py-2 rounded-xl text-xs font-semibold text-gray-500 hover:text-gray-800 transition-colors"
      >
        Cerrar Ventana
      </button>
    </div>

  </div>
</div>

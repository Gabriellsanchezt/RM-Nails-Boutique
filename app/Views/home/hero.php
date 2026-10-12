<!-- Hero Section -->
<section id="inicio" class="relative overflow-hidden bg-gradient-to-b from-[#FFF0F5] via-[#FFF8FA] to-[#FCF8F9] py-12 lg:py-20 border-b border-pink-100/60">
  <div class="absolute top-10 left-1/4 w-72 h-72 bg-pink-300/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-96 h-96 bg-[#D4AF37]/15 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
      
      <!-- Left Column: Copy & High-Converting CTAs -->
      <div class="lg:col-span-7 text-center lg:text-left">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-pink-200 shadow-sm text-pink-600 text-xs font-bold tracking-wide uppercase mb-6">
          <span class="w-2 h-2 rounded-full bg-pink-500 animate-ping"></span>
          <span>Insumos Profesionales de Belleza | Barquisimeto & Venezuela</span>
        </div>

        <h1 class="font-serif font-extrabold text-3xl sm:text-5xl lg:text-6xl text-gray-900 leading-[1.15] mb-6">
          Todo lo que necesitas para tu <span class="gold-text-gradient">estudio o salon</span> de belleza.
        </h1>

        <p class="text-sm sm:text-base lg:text-lg text-gray-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-8">
          Insumos seleccionados para <strong>Manicuristas</strong>, <strong>Brows Artists</strong> y <strong>Lashistas</strong>. Calidad certificada, asesoria personalizada y precios directos para potenciar tu mesa de trabajo.
        </p>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 sm:gap-4 mb-10">
          <a 
            href="#catalogo" 
            onclick="resetFilters()"
            class="w-full sm:w-auto btn-primary-boutique px-8 py-3.5 rounded-full text-sm font-bold flex items-center justify-center gap-2 text-center"
          >
            <span>Ver Catalogo Completo</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>

          <button 
            onclick="openGeneralWhatsApp()" 
            class="w-full sm:w-auto bg-white hover:bg-pink-50 text-gray-800 border-2 border-pink-300 px-7 py-3.5 rounded-full text-sm font-bold flex items-center justify-center gap-2 transition-all shadow-sm"
          >
            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
            </svg>
            <span>Pedir Asesoria al WhatsApp</span>
          </button>
        </div>

        <!-- Trust Stats Pill Grid -->
        <div class="grid grid-cols-3 gap-3 max-w-lg mx-auto lg:mx-0 pt-4 border-t border-pink-200/60">
          <div class="text-center lg:text-left">
            <div class="font-serif font-black text-xl sm:text-2xl text-pink-600">+5,000</div>
            <div class="text-[11px] text-gray-500 font-medium">Pedidos Despachados</div>
          </div>
          <div class="text-center lg:text-left border-x border-pink-200/60 px-2">
            <div class="font-serif font-black text-xl sm:text-2xl text-amber-600">100%</div>
            <div class="text-[11px] text-gray-500 font-medium">Originales Garantizados</div>
          </div>
          <div class="text-center lg:text-left">
            <div class="font-serif font-black text-xl sm:text-2xl text-pink-600">24/48h</div>
            <div class="text-[11px] text-gray-500 font-medium">Envios a Nivel Nacional</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Visual Boutique Showcase with Instagram Logo / Post Image -->
      <div class="lg:col-span-5 relative">
        <div class="relative mx-auto max-w-md lg:max-w-none">
          
          <div class="relative bg-white p-4 rounded-3xl shadow-2xl border border-pink-200/80 overflow-hidden transform hover:-rotate-1 transition-transform duration-500">
            <div class="relative h-96 w-full rounded-2xl overflow-hidden bg-pink-100 flex items-center justify-center">
              <img 
                src="<?= \App\Core\View::asset('assets/images/hero-showcase.jpg') ?>" 
                alt="RM Nails Boutique Estudio e Insumos" 
                class="w-full h-full object-cover"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
              
              <!-- Floating Official RM Boutique Seal Badge -->
              <div class="absolute top-4 left-4 z-10 flex items-center gap-2.5 bg-white/95 backdrop-blur-md py-1.5 px-3 rounded-full shadow-lg border border-pink-200">
                <div class="w-7 h-7 rounded-full overflow-hidden p-0.5 bg-gradient-to-tr from-[#E57399] via-[#F29AB6] to-[#D4AF37] flex items-center justify-center flex-shrink-0">
                  <img src="<?= \App\Core\View::asset('assets/images/logo.jpg') ?>" alt="RM Logo" class="w-full h-full object-cover rounded-full" />
                </div>
                <div>
                  <span class="font-serif font-bold text-xs text-gray-900 block leading-tight">RM Nails Boutique</span>
                  <span class="text-[8px] text-[#C84B75] font-semibold uppercase tracking-wider block">Estudio & Insumos</span>
                </div>
              </div>

              <div class="absolute bottom-4 left-4 right-4 text-white z-10">
                <span class="inline-block bg-[#D4AF37] text-white text-[10px] font-black uppercase px-2.5 py-1 rounded-full mb-1">
                  RM Nails Boutique
                </span>
                <h3 class="font-serif font-bold text-lg text-white">
                  La boutique de las unas
                </h3>
                <p class="text-xs text-white/90">Una seleccion hecha por manicuristas, para manicuristas.</p>
              </div>
            </div>
          </div>

          <!-- Floating badge 1: Delivery Barquisimeto with SVG icon -->
          <div class="absolute -top-3 left-1 xs:left-2 sm:-top-4 sm:-left-6 bg-white/95 backdrop-blur-md border border-pink-200 p-2.5 sm:p-3 rounded-2xl shadow-xl flex items-center gap-2 sm:gap-3">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div>
              <div class="text-[11px] sm:text-xs font-bold text-gray-800">Delivery en Barquisimeto</div>
              <div class="text-[9px] sm:text-[10px] text-gray-500">Directo a tu cabina o salon</div>
            </div>
          </div>

          <!-- Floating badge 2: WhatsApp Verified with SVG icon -->
          <div class="absolute -bottom-3 right-1 xs:right-2 sm:-bottom-4 sm:-right-6 bg-white/95 backdrop-blur-md border border-emerald-200 p-2.5 sm:p-3 rounded-2xl shadow-xl flex items-center gap-2 sm:gap-3">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
              </svg>
            </div>
            <div>
              <div class="text-[11px] sm:text-xs font-bold text-gray-800">Atencion Personalizada</div>
              <div class="text-[9px] sm:text-[10px] text-emerald-600 font-semibold">Respuesta inmediata</div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

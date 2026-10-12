<!-- Checkout Modal -->
<div id="checkout-modal" class="modal-overlay fixed inset-0 bg-black/60 z-50 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4">
  <div class="modal-container bg-white rounded-2xl sm:rounded-3xl max-w-lg w-full overflow-hidden shadow-2xl border border-pink-100 max-h-[92vh] flex flex-col">
    
    <!-- Modal Header -->
    <div class="p-4 sm:p-5 border-b border-pink-100 bg-gradient-to-r from-pink-50 to-white flex items-center justify-between">
      <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm font-bold flex-shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
        </div>
        <div>
          <h3 class="font-serif font-bold text-sm sm:text-base text-gray-900">Enviar Orden a WhatsApp</h3>
          <p class="text-[10px] sm:text-[11px] text-gray-500"><?= htmlspecialchars($appName ?? 'RM Nails Boutique') ?> | wa.me/<?= htmlspecialchars($whatsApp ?? '584120549526') ?></p>
        </div>
      </div>
      <button onclick="closeCheckoutModal()" class="text-gray-400 hover:text-gray-700 p-1.5 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Cerrar modal de pedido">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
      </button>
    </div>

    <!-- Modal Body (Form) -->
    <form id="checkout-form" class="p-4 sm:p-6 overflow-y-auto space-y-3.5 sm:space-y-4" novalidate>
      
      <!-- Alert Message Box -->
      <div id="checkout-form-alert" class="hidden p-3 rounded-xl text-xs font-semibold bg-rose-50 border border-rose-200 text-rose-700"></div>

      <!-- Summary Box -->
      <div class="bg-[#FCF8F9] p-3.5 rounded-2xl border border-pink-100">
        <span class="text-[10px] font-black uppercase text-pink-600 tracking-wider block mb-1.5">Lista de Insumos Seleccionados:</span>
        <div id="checkout-summary-items" class="max-h-24 overflow-y-auto space-y-1 mb-2 pr-1"></div>
        <div class="border-t border-pink-100 pt-2 flex justify-between items-baseline font-bold text-xs text-gray-900">
          <span>Monto Total Estimado:</span>
          <div class="text-right">
            <span id="checkout-total-usd" class="text-sm text-pink-700">$0.00</span>
            <span id="checkout-total-ves" class="text-[10px] text-gray-500 font-normal block">Bs. 0.00</span>
          </div>
        </div>
      </div>

      <!-- Customer Name & Phone -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div>
          <label for="customer-name" class="block text-xs font-bold text-gray-700 mb-1">
            Nombre Completo <span class="text-rose-500">*</span>
          </label>
          <input 
            id="customer-name" 
            name="customer_name"
            type="text" 
            required 
            placeholder="Ej. Maria Perez" 
            class="w-full bg-[#FCF8F9] border border-pink-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-pink-500 transition-colors" 
          />
          <p id="error-customer-name" class="hidden text-[11px] text-rose-600 mt-1 font-medium"></p>
        </div>
        <div>
          <label for="customer-phone" class="block text-xs font-bold text-gray-700 mb-1">
            Telefono / WhatsApp <span class="text-rose-500">*</span>
          </label>
          <input 
            id="customer-phone" 
            name="customer_phone"
            type="tel" 
            required 
            placeholder="Ej. 0412 1234567" 
            class="w-full bg-[#FCF8F9] border border-pink-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-pink-500 transition-colors" 
          />
          <p id="error-customer-phone" class="hidden text-[11px] text-rose-600 mt-1 font-medium"></p>
        </div>
      </div>

      <!-- Delivery Option -->
      <div>
        <label class="block text-xs font-bold text-gray-700 mb-1.5">
          Metodo de Envio / Entrega <span class="text-rose-500">*</span>
        </label>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-xs">
          <label class="shipping-method-option border border-pink-200 rounded-xl p-2.5 flex items-center gap-2 cursor-pointer hover:bg-pink-50 transition-colors bg-[#FCF8F9]">
            <input type="radio" name="shipping_method" value="Delivery en Barquisimeto" checked class="text-pink-600 focus:ring-pink-500" />
            <span class="font-medium text-gray-800">Delivery Bqto</span>
          </label>
          <label class="shipping-method-option border border-pink-200 rounded-xl p-2.5 flex items-center gap-2 cursor-pointer hover:bg-pink-50 transition-colors bg-[#FCF8F9]">
            <input type="radio" name="shipping_method" value="Retiro en Tienda Barquisimeto" class="text-pink-600 focus:ring-pink-500" />
            <span class="font-medium text-gray-800">Retiro Tienda</span>
          </label>
          <label class="shipping-method-option border border-pink-200 rounded-xl p-2.5 flex items-center gap-2 cursor-pointer hover:bg-pink-50 transition-colors bg-[#FCF8F9]">
            <input type="radio" name="shipping_method" value="Envio Nacional (MRW/Zoom/Tealca)" class="text-pink-600 focus:ring-pink-500" />
            <span class="font-medium text-gray-800">Envio Nacional</span>
          </label>
        </div>
        <p id="error-shipping-method" class="hidden text-[11px] text-rose-600 mt-1 font-medium"></p>
      </div>

      <!-- City & Address -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div>
          <label for="customer-city" class="block text-xs font-bold text-gray-700 mb-1">
            Ciudad / Estado <span class="text-rose-500">*</span>
          </label>
          <input 
            id="customer-city" 
            name="customer_city"
            type="text" 
            required
            placeholder="Ej. Barquisimeto / Caracas" 
            class="w-full bg-[#FCF8F9] border border-pink-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-pink-500 transition-colors" 
          />
          <p id="error-customer-city" class="hidden text-[11px] text-rose-600 mt-1 font-medium"></p>
        </div>
        <div>
          <label for="customer-address" class="block text-xs font-bold text-gray-700 mb-1">
            <span id="label-address-text">Direccion / Salon / Agencia</span> <span id="label-address-req" class="text-rose-500">*</span>
          </label>
          <input 
            id="customer-address" 
            name="customer_address"
            type="text" 
            placeholder="Ej. Urb. Del Este, Salon Glamour" 
            class="w-full bg-[#FCF8F9] border border-pink-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-pink-500 transition-colors" 
          />
          <p id="error-customer-address" class="hidden text-[11px] text-rose-600 mt-1 font-medium"></p>
        </div>
      </div>

      <!-- Payment Method -->
      <div>
        <label for="payment-method" class="block text-xs font-bold text-gray-700 mb-1">
          Metodo de Pago Preferido <span class="text-rose-500">*</span>
        </label>
        <select 
          id="payment-method"
          name="payment_method"
          class="w-full bg-[#FCF8F9] border border-pink-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-pink-500 font-medium transition-colors"
        >
          <option value="Pago Movil (Tasa Oficial)">Pago Movil (Bolivares)</option>
          <option value="Zelle">Zelle (USD)</option>
          <option value="Dolares en Efectivo (Contra entrega o en tienda)">Dolares en Efectivo</option>
          <option value="Transferencia Banesco o Mercantil">Transferencia Bancaria Nacional</option>
          <option value="Binance Pay (USDT)">Binance Pay (USDT)</option>
        </select>
        <p id="error-payment-method" class="hidden text-[11px] text-rose-600 mt-1 font-medium"></p>
      </div>

      <!-- Extra Notes -->
      <div>
        <label for="customer-notes" class="block text-xs font-bold text-gray-700 mb-1">Consulta o Especificaciones para la Asesora</label>
        <textarea 
          id="customer-notes" 
          name="customer_notes"
          rows="2" 
          placeholder="Consultar tonos especificos de esmaltes, disponibilidad inmediata o coordinar horario de entrega..." 
          class="w-full bg-[#FCF8F9] border border-pink-200 rounded-xl p-2.5 text-xs focus:outline-none focus:border-pink-500 transition-colors"
        ></textarea>
      </div>

      <!-- Submit Button con Estado de Carga -->
      <button 
        id="checkout-submit-btn"
        type="submit" 
        class="w-full bg-emerald-500 hover:bg-emerald-600 disabled:opacity-60 disabled:cursor-not-allowed text-white font-bold py-3.5 rounded-xl text-xs flex items-center justify-center gap-2 shadow-lg transition-all"
      >
        <svg id="checkout-btn-icon" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.974.53 1.83.82 2.792.82 3.183 0 5.77-2.587 5.77-5.768.001-3.182-2.585-5.804-5.77-5.804zm8.286 5.768c0 4.568-3.719 8.286-8.286 8.286-1.42 0-2.75-.36-3.92-.99l-4.35 1.14 1.16-4.24c-.73-1.23-1.16-2.67-1.16-4.196 0-4.567 3.719-8.286 8.27-8.286 4.567 0 8.286 3.719 8.286 8.286z"/>
        </svg>
        <svg id="checkout-btn-spinner" class="hidden animate-spin w-5 h-5 text-white" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span id="checkout-btn-text">Enviar Lista de Pedido a WhatsApp</span>
      </button>

    </form>
  </div>
</div>

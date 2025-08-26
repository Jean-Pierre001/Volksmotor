<!-- Modal Métodos de Pago -->
<div id="payModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-8 relative animate-fadeIn">
    
    <!-- Botón cerrar -->
    <button id="closePayModal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 font-bold text-xl">&times;</button>

    <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Elige un método de pago</h2>

    <div class="flex flex-col gap-4">
      <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 py-3 rounded-full font-semibold shadow-md transition">
        PayPal
      </button>
      <button class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-full font-semibold shadow-md transition">
        Tarjeta de Crédito
      </button>
    </div>
  </div>
</div>

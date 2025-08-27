<!-- Modal de Personalización de Auto -->
<div id="modalCustomizeCar" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-8 relative">
    
    <!-- Botón cerrar -->
    <button id="closeModalCustomizeCar" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 font-bold text-xl">&times;</button>

    <!-- Encabezado -->
    <h2 class="text-xl font-semibold mb-6 text-center text-gray-700">Personalizar Auto</h2>

    <form action="cart.php" method="POST" class="space-y-4">

      <!-- Selección de Modelo -->
      <div>
        <label for="modelo" class="block text-gray-700 font-semibold mb-1">Modelo</label>
        <select name="modelo" id="modelo" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Selecciona un modelo</option>
          <option value="polo">Volkswagen Polo</option>
          <option value="gol">Volkswagen Gol</option>
          <option value="up">Volkswagen Up</option>
          <!-- Agrega más modelos aquí -->
        </select>
      </div>

      <!-- Selección de Color -->
      <div>
        <label for="color" class="block text-gray-700 font-semibold mb-1">Color</label>
        <select name="color" id="color" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Selecciona un color</option>
          <option value="rojo">Rojo</option>
          <option value="azul">Azul</option>
          <option value="negro">Negro</option>
          <option value="blanco">Blanco</option>
          <option value="gris">Gris</option>
        </select>
      </div>

      <!-- Cantidad -->
      <div>
        <label for="cantidad" class="block text-gray-700 font-semibold mb-1">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad" min="1" value="1" required
               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Extras -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Extras</label>
        <div class="flex flex-col space-y-2">
          <label class="flex items-center gap-2">
            <input type="checkbox" name="extras[]" value="gps" class="accent-blue-500"> GPS
          </label>
          <label class="flex items-center gap-2">
            <input type="checkbox" name="extras[]" value="asientos_cuero" class="accent-blue-500"> Asientos de cuero
          </label>
          <label class="flex items-center gap-2">
            <input type="checkbox" name="extras[]" value="cámara_reversa" class="accent-blue-500"> Cámara de reversa
          </label>
          <!-- Agrega más extras aquí -->
        </div>
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold shadow-md mt-2">
        Añadir al carrito
      </button>

    </form>
  </div>
</div>

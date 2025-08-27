<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="flex-1 flex flex-col min-h-screen ml-0 md:ml-64">

  <!-- Navbar -->
  <header class="flex justify-between items-center px-6 py-4 shadow-sm bg-white">
      <h1 class="text-2xl font-bold text-gray-900">Panel de Autos</h1>
      <div class="flex items-center space-x-4">
          <span class="text-gray-900 font-medium">Hola, Admin</span>
          <!-- Foto de perfil con modal -->
          <button data-modal-toggle="profileModal">
              <img src="https://i.pravatar.cc/150?img=3" alt="Perfil" class="w-10 h-10 rounded-full cursor-pointer">
          </button>
      </div>
  </header>

  <!-- Main content -->
  <main class="p-6 flex-1">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-xl font-bold text-gray-900">Autos Disponibles</h2>
      <button data-modal-toggle="carModal" class="px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-700">Agregar Auto</button>
    </div>

    <!-- Tabla de Autos -->
    <div class="overflow-x-auto rounded-lg shadow">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-2 text-gray-700 font-medium">Marca</th>
            <th class="px-4 py-2 text-gray-700 font-medium">Modelo</th>
            <th class="px-4 py-2 text-gray-700 font-medium">Año</th>
            <th class="px-4 py-2 text-gray-700 font-medium">Precio</th>
            <th class="px-4 py-2 text-gray-700 font-medium">Acciones</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="border-b hover:bg-gray-50 transition">
            <td class="px-4 py-2">Toyota</td>
            <td class="px-4 py-2">Corolla</td>
            <td class="px-4 py-2">2023</td>
            <td class="px-4 py-2">$25,000</td>
            <td class="px-4 py-2 space-x-2">
              <button data-modal-toggle="carModal" class="px-2 py-1 bg-blue-600 text-white rounded hover:bg-blue-500">Editar</button>
              <button class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-500">Eliminar</button>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-50 transition">
            <td class="px-4 py-2">Honda</td>
            <td class="px-4 py-2">Civic</td>
            <td class="px-4 py-2">2022</td>
            <td class="px-4 py-2">$23,000</td>
            <td class="px-4 py-2 space-x-2">
              <button data-modal-toggle="carModal" class="px-2 py-1 bg-blue-600 text-white rounded hover:bg-blue-500">Editar</button>
              <button class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-500">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-4 text-center">
    &copy; 2025 Volksmotor - Todos los derechos reservados
  </footer>
</div>

<!-- Modals -->

<!-- Modal Perfil -->
<div id="profileModal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-xl shadow-lg w-96 p-6 relative">
    <h2 class="text-xl font-bold mb-4 text-gray-900">Perfil de Usuario</h2>
    <form class="space-y-4">
      <div>
        <label class="block text-gray-700 font-medium">Nombre</label>
        <input type="text" class="w-full border p-2 rounded" value="Admin">
      </div>
      <div>
        <label class="block text-gray-700 font-medium">Email</label>
        <input type="email" class="w-full border p-2 rounded" value="admin@mail.com">
      </div>
      <div>
        <label class="block text-gray-700 font-medium">Contraseña</label>
        <input type="password" class="w-full border p-2 rounded" placeholder="Nueva contraseña">
      </div>
      <div class="flex justify-between mt-4">
        <button type="button" data-modal-toggle="profileModal" class="px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-700">Cerrar</button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500">Guardar cambios</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Agregar/Editar Auto -->
<div id="carModal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-xl shadow-lg w-96 p-6 relative">
    <h2 class="text-xl font-bold mb-4 text-gray-900">Agregar / Editar Auto</h2>
    <form class="space-y-4">
      <div>
        <label class="block text-gray-700 font-medium">Marca</label>
        <input type="text" class="w-full border p-2 rounded" placeholder="Toyota">
      </div>
      <div>
        <label class="block text-gray-700 font-medium">Modelo</label>
        <input type="text" class="w-full border p-2 rounded" placeholder="Corolla">
      </div>
      <div>
        <label class="block text-gray-700 font-medium">Año</label>
        <input type="number" class="w-full border p-2 rounded" placeholder="2025">
      </div>
      <div>
        <label class="block text-gray-700 font-medium">Precio</label>
        <input type="number" class="w-full border p-2 rounded" placeholder="20000">
      </div>
      <div class="flex justify-between mt-4">
        <button type="button" data-modal-toggle="carModal" class="px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-700">Cerrar</button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500">Guardar</button>
      </div>
    </form>
  </div>
</div>

<!-- Flowbite Script al final para que funcione correctamente -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

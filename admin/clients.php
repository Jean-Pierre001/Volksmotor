<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/modals/crud_modals.php'; ?>

<div class="flex-1 flex flex-col min-h-screen ml-0 md:ml-64">
  <header class="navbar flex justify-between items-center px-6 py-4 shadow-sm">
    <h1 class="text-2xl font-bold text-gray-900">Gestión de Clientes</h1>
    <div class="flex items-center space-x-4">
      <span class="text-gray-900 font-medium">Hola, Admin</span>
      <img src="https://i.pravatar.cc/150?img=3" alt="Perfil">
    </div>
  </header>

  <main class="p-6 flex-1">
    <div class="flex justify-between mb-4">
      <button class="bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-700 flex items-center">
        <i class="fas fa-plus mr-2"></i> Agregar Cliente
      </button>
      <input type="text" placeholder="Buscar..." class="border p-2 rounded w-64">
    </div>

    <div class="bg-white shadow rounded-xl overflow-x-auto">
      <table class="min-w-full border-collapse border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Nombre</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Teléfono</th>
            <th class="p-3 text-left">Ciudad</th>
            <th class="p-3 text-left">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-3">1</td>
            <td class="p-3">Juan Pérez</td>
            <td class="p-3">juan@mail.com</td>
            <td class="p-3">123-456-789</td>
            <td class="p-3">Buenos Aires</td>
            <td class="p-3 space-x-2">
              <button class="bg-gray-900 text-white px-2 py-1 rounded hover:bg-gray-700"><i class="fas fa-edit"></i> Editar</button>
              <button class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700"><i class="fas fa-trash"></i> Eliminar</button>
              <button class="bg-green-600 text-white px-2 py-1 rounded hover:bg-red-700"><i class="fas fa-check"></i> Activar</button>
            </td>
          </tr>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-3">2</td>
            <td class="p-3">María Gómez</td>
            <td class="p-3">maria@mail.com</td>
            <td class="p-3">987-654-321</td>
            <td class="p-3">Córdoba</td>
            <td class="p-3 space-x-2">
              <button class="bg-gray-900 text-white px-2 py-1 rounded hover:bg-gray-700"><i class="fas fa-edit"></i> Editar</button>
              <button class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700"><i class="fas fa-trash"></i> Eliminar</button>
              <button class="bg-green-600 text-white px-2 py-1 rounded hover:bg-red-700"><i class="fas fa-check"></i> Activar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>
</div>

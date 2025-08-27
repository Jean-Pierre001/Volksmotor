<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="flex-1 flex flex-col min-h-screen ml-0 md:ml-64">
  <header class="navbar flex justify-between items-center px-6 py-4 shadow-sm">
    <h1 class="text-2xl font-bold text-gray-900">Reportes de Ventas</h1>
    <div class="flex items-center space-x-4">
      <span class="text-gray-900 font-medium">Hola, Admin</span>
      <img src="https://i.pravatar.cc/150?img=3" alt="Perfil">
    </div>
  </header>

  <main class="p-6 flex-1">
    <div class="flex justify-between mb-4">
      <button class="bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-700 flex items-center">
        <i class="fas fa-download mr-2"></i> Exportar Reporte
      </button>
      <input type="text" placeholder="Buscar por cliente o auto..." class="border p-2 rounded w-64">
    </div>

    <div class="bg-white shadow rounded-xl overflow-x-auto">
      <table class="min-w-full border-collapse border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-3 text-left">ID Venta</th>
            <th class="p-3 text-left">Cliente</th>
            <th class="p-3 text-left">Auto</th>
            <th class="p-3 text-left">Precio</th>
            <th class="p-3 text-left">Fecha</th>
            <th class="p-3 text-left">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-3">101</td>
            <td class="p-3">Juan Pérez</td>
            <td class="p-3">Toyota Corolla</td>
            <td class="p-3">$20,000</td>
            <td class="p-3">01/08/2025</td>
            <td class="p-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Completada</span></td>
          </tr>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-3">102</td>
            <td class="p-3">María Gómez</td>
            <td class="p-3">Honda Civic</td>
            <td class="p-3">$18,500</td>
            <td class="p-3">03/08/2025</td>
            <td class="p-3"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pendiente</span></td>
          </tr>
        </tbody>
      </table>

      <!-- Gráfico de Ventas -->
      <div class="mt-6 p-6 bg-white rounded-xl shadow">
        <h2 class="text-gray-900 font-semibold mb-4">Ventas del Mes</h2>
        <canvas id="monthlySalesChart" class="w-full h-64"></canvas>
      </div>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>
</div>

<script>
const ctxMonthly = document.getElementById('monthlySalesChart').getContext('2d');
new Chart(ctxMonthly, {type:'line', data:{labels:['Ene','Feb','Mar','Abr','May','Jun'], datasets:[{label:'Ventas', data:[12000,15000,14000,18000,20000,25000], borderColor:'#111827', backgroundColor:'rgba(17,24,39,0.1)', tension:0.3}]}, options:{responsive:true}});
</script>

<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="flex-1 flex flex-col min-h-screen ml-0 md:ml-64">
  <!-- Navbar -->
  <header class="navbar flex justify-between items-center px-6 py-4 shadow-sm">
    <h1 class="text-2xl font-bold text-gray-900">Panel de Control</h1>
    <div class="flex items-center space-x-4">
      <span class="text-gray-900 font-medium">Hola, Admin</span>
      <img src="https://i.pravatar.cc/150?img=3" alt="Perfil">
    </div>
  </header>

  <!-- Main content -->
  <main class="p-6 flex-1">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="card p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm font-medium mb-2">Ventas Mensuales</h2>
        <p class="text-2xl font-bold text-gray-900">$25,430</p>
        <p class="text-gray-400 text-sm mt-1">+12% respecto al mes anterior</p>
      </div>
      <div class="card p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm font-medium mb-2">Autos Vendidos</h2>
        <p class="text-2xl font-bold text-gray-900">182</p>
        <p class="text-gray-400 text-sm mt-1">Toyota Corolla más vendido</p>
      </div>
      <div class="card p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm font-medium mb-2">Clientes</h2>
        <p class="text-2xl font-bold text-gray-900">96</p>
        <p class="text-gray-400 text-sm mt-1">Activos +8%</p>
      </div>
      <div class="card p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-gray-500 text-sm font-medium mb-2">Usuarios</h2>
        <p class="text-2xl font-bold text-gray-900">5</p>
        <p class="text-gray-400 text-sm mt-1">Admins:2, Editores:3</p>
      </div>
    </div>

    <!-- Gráficos -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="card p-6 rounded-xl shadow">
        <h2 class="text-gray-700 font-semibold mb-4">Ventas Mensuales</h2>
        <canvas id="salesChart" class="w-full h-64"></canvas>
      </div>
      <div class="card p-6 rounded-xl shadow">
        <h2 class="text-gray-700 font-semibold mb-4">Autos Más Vendidos</h2>
        <canvas id="topCarsChart" class="w-full h-64"></canvas>
      </div>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>
</div>

<script>
const ctxSales = document.getElementById('salesChart').getContext('2d');
new Chart(ctxSales, {type:'line', data:{labels:['Ene','Feb','Mar','Abr','May','Jun'], datasets:[{label:'Ventas', data:[12000,15000,14000,18000,20000,25000], borderColor:'#111827', backgroundColor:'rgba(17,24,39,0.1)', tension:0.3}]}});
const ctxTopCars = document.getElementById('topCarsChart').getContext('2d');
new Chart(ctxTopCars, {type:'bar', data:{labels:['Corolla','Civic','X5','Model S'], datasets:[{label:'Unidades Vendidas', data:[40,25,15,10], backgroundColor:['#111827','#4B5563','#6B7280','#9CA3AF']}]}});

</script>

<?php include 'includes/header.php'; ?>
<?php include 'includes/modals/modalcart.php'; ?>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
  <?php include 'includes/navbar.php'; ?>
  <br>
  <br>

  <!-- Carrito -->
  <section class="relative py-20 bg-gradient-to-b from-gray-100 to-gray-200 min-h-screen">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h1 class="text-5xl font-extrabold text-gray-800 mb-12 text-center">Reservaciones</h1>

      <!-- Productos en carrito -->
      <div class="space-y-8">

        <!-- Producto -->
        <div class="flex flex-col md:flex-row items-center justify-between bg-white rounded-2xl shadow-2xl p-6 hover:shadow-3xl transition">
          <div class="flex items-center space-x-6">
            <img src="assets/img/Productos/polo.png" alt="Polo" class="w-50 h-40 object-cover rounded-xl shadow-md">
            <div>
              <h2 class="text-2xl font-bold text-gray-800">Volksmotor Polo</h2>
              <p class="text-gray-500">Anticipo</p>
              <p class="text-lg text-gray-700">Cantidad: <span class="font-semibold">1</span></p>
            </div>
          </div>
          <p class="text-3xl font-bold text-blue-700 mt-4 md:mt-0">$8.155.000</p>
        </div>

        <!-- Producto -->
        <div class="flex flex-col md:flex-row items-center justify-between bg-white rounded-2xl shadow-2xl p-6 hover:shadow-3xl transition">
          <div class="flex items-center space-x-6">
            <img src="assets/img/Productos/amarok.png" alt="Amarok" class="w-50 h-40 object-cover rounded-xl shadow-md">
            <div>
              <h2 class="text-2xl font-bold text-gray-800">Volksmotor Amarok</h2>
              <p class="text-gray-500">Anticipo</p>
              <p class="text-lg text-gray-700">Cantidad: <span class="font-semibold">2</span></p>
            </div>
          </div>
          <p class="text-3xl font-bold text-blue-700 mt-4 md:mt-0">$26.400.000</p>
        </div>

      </div>

      <!-- Resumen -->
      <div class="mt-12 bg-white rounded-2xl shadow-2xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Resumen de la Compra</h2>
        <div class="flex justify-between text-lg text-gray-700 mb-3">
          <span>Subtotal</span>
          <span>$34.555.000</span>
        </div>
        <div class="flex justify-between text-lg text-gray-700 mb-3">
          <span>Envío</span>
          <span>$0</span>
        </div>
        <div class="flex justify-between text-2xl font-bold text-gray-900 border-t pt-4">
          <span>Total</span>
          <span class="text-blue-700">$34.555.000</span>
        </div>

        <!-- Botones -->
        <div class="mt-8 flex flex-col md:flex-row justify-between gap-4">
          <a href="index.php" class="px-8 py-4 bg-gray-200 text-gray-800 font-semibold rounded-full shadow hover:bg-gray-300 text-center transition">
            ← Seguir Comprando
          </a>
          <button id="openPayModal" class="px-8 py-4 bg-blue-700 text-white font-semibold rounded-full shadow hover:bg-blue-800 text-center transition">
            Finalizar Compra →
          </button>
        </div>
      </div>

    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
<script>
  const navbar = document.getElementById('navbar');
  const navLinks = document.querySelectorAll('#navbar .nav-link');

  if (navbar) {
    // Aplica el estilo "scrolleado" siempre
    navbar.classList.add('bg-gray-900', 'shadow-md');
    navbar.classList.remove('bg-transparent');

    navLinks.forEach(link => {
      link.classList.remove('text-gray', 'hover:text-blue-300');
      link.classList.add('text-white', 'hover:text-gray-200');
    });
  }
</script>



<!-- Script para abrir/cerrar modal -->
<script>
const openPayModal = document.getElementById('openPayModal');
const closePayModal = document.getElementById('closePayModal');
const payModal = document.getElementById('payModal');

openPayModal.addEventListener('click', () => {
  payModal.classList.remove('hidden');
});

closePayModal.addEventListener('click', () => {
  payModal.classList.add('hidden');
});

window.addEventListener('click', (e) => {
  if (e.target === payModal) {
    payModal.classList.add('hidden');
  }
});
</script>


</script>
</body>
</html>

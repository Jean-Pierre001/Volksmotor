<?php include 'includes/header.php'; ?>

<body class="font-sans antialiased bg-gray-50 text-gray-900">
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/modals/modalcart.php'; ?>

  <main class="min-h-screen pt-20 pb-12">
    <div class="container mx-auto px-4 py-8">
      <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8 flex items-center">
          <i class="fa-solid fa-cart-shopping text-brand-500 mr-4"></i> Tu Carrito de Volksmotor
        </h1>

        <div class="flex flex-col lg:flex-row gap-8">
          
          <div class="flex-1 bg-white rounded-lg shadow-2xl overflow-hidden p-6 md:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Artículos en tu Carrito</h2>

            <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6 border-b border-gray-200 pb-6 mb-6">
              <img src="assets/img/Productos/polo.png" alt="Volkswagen Polo" class="w-48 h-auto object-cover rounded-lg shadow-md flex-shrink-0">
              
              <div class="flex-1 text-center md:text-left">
                <h3 class="text-xl font-semibold text-gray-900">VM Polo Track</h3>
                <p class="text-gray-500 text-sm mt-1">Versión 1.6 MSI, 110 CV</p>
                
                <div class="mt-4 text-gray-700 text-sm space-y-2">
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-car-side mr-2 text-brand-500"></i>
                    <span>Cantidad: <strong class="text-gray-900">7</strong></span>
                  </div>
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-car-side mr-2 text-brand-500"></i>
                    <span>Color: <strong class="text-gray-900">Blanco Puro</strong></span>
                  </div>
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-gauge-high mr-2 text-brand-500"></i>
                    <span>Motor: <strong class="text-gray-900">1.6 MSI</strong></span>
                  </div>
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-cogs mr-2 text-brand-500"></i>
                    <span>Equipamiento: <strong class="text-gray-900">Media Plus + Sensores</strong></span>
                  </div>
                </div>
              </div>
              
              <div class="flex flex-col items-center md:items-end justify-between md:h-full">
                <div class="text-lg font-bold text-brand-500 text-center md:text-right">
                  <span class="text-gray-900 font-normal">Anticipo:</span> <br class="md:hidden">$8.155.000
                </div>
                <button class="mt-4 md:mt-0 text-red-500 hover:text-red-700 transition">
                  <i class="fa-solid fa-trash-can text-lg mr-1"></i> Eliminar
                </button>
              </div>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6 border-b border-gray-200 pb-6 mb-6">
              <img src="assets/img/Productos/taos.png" alt="Volkswagen Taos" class="w-48 h-auto object-cover rounded-lg shadow-md flex-shrink-0">
              
              <div class="flex-1 text-center md:text-left">
                <h3 class="text-xl font-semibold text-gray-900">VM Taos</h3>
                <p class="text-gray-500 text-sm mt-1">Versión 1.4 TSI, 150 CV</p>
                
                <div class="mt-4 text-gray-700 text-sm space-y-2">
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-car-side mr-2 text-brand-500"></i>
                    <span>Cantidad: <strong class="text-gray-900">2</strong></span>
                  </div>
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-car-side mr-2 text-brand-500"></i>
                    <span>Color: <strong class="text-gray-900">Gris Indium</strong></span>
                  </div>
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-gauge-high mr-2 text-brand-500"></i>
                    <span>Motor: <strong class="text-gray-900">1.4 TSI</strong></span>
                  </div>
                  <div class="flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-cogs mr-2 text-brand-500"></i>
                    <span>Equipamiento: <strong class="text-gray-900">VW Play + Rueda de auxilio</strong></span>
                  </div>
                </div>
              </div>

              <div class="flex flex-col items-center md:items-end justify-between md:h-full">
                <div class="text-lg font-bold text-brand-500 text-center md:text-right">
                  <span class="text-gray-900 font-normal">Anticipo:</span> <br class="md:hidden">$5.155.000
                </div>
                <button class="mt-4 md:mt-0 text-red-500 hover:text-red-700 transition">
                  <i class="fa-solid fa-trash-can text-lg mr-1"></i> Eliminar
                </button>
              </div>
            </div>

            <div class="flex justify-between items-center mt-8 pt-4 border-t border-gray-300">
              <a href="index.php" class="text-blue-600 hover:underline flex items-center">
                <i class="fa-solid fa-chevron-left mr-2"></i> Seguir Comprando
              </a>
              <button class="text-sm font-semibold text-gray-600 hover:text-gray-900 transition">Vaciar Carrito</button>
            </div>

          </div>

          <div class="lg:w-1/3 bg-white rounded-lg shadow-2xl p-6 md:p-8 flex flex-col h-fit">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Resumen de la Reserva</h2>
            
            <div class="space-y-4 text-lg mb-6">
              <div class="flex justify-between items-center">
                <span class="text-gray-600">Total de Anticipos:</span>
                <span class="font-semibold text-gray-900">$13.310.000</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-600">Costo de Gestión:</span>
                <span class="font-semibold text-gray-900">$200.000</span>
              </div>
              <div class="flex justify-between items-center font-bold text-xl pt-2 border-t-2 border-brand-500">
                <span class="text-gray-800">Total Estimado:</span>
                <span class="text-brand-500">$13.510.000</span>
              </div>
            </div>

            <button form="checkout-form" type="submit" class="openModalCart mt-6 px-6 py-4 bg-brand-500 text-white font-bold rounded-full shadow-lg hover:bg-brand-600 transition text-center text-lg uppercase tracking-wide">
              <i class="fa-solid fa-lock mr-2"></i> Selecionar Forma de Pago
            </button>
            <p class="text-xs text-gray-400 mt-2 text-center">
              Tu información está segura con nosotros.
            </p>

          </div>
        </div>
      </div>
    </div>
  </main>

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
    const openModalBtnCart = document.querySelectorAll('.openModalCart');
    const closeModalBtnCart = document.getElementById('closeModalCart');
    const cartModal = document.getElementById('modalCart');

    openModalBtnCart.forEach(btn => {
      btn.addEventListener('click', () => {
        cartModal.classList.remove('hidden');
      });
    });

    closeModalBtnCart.addEventListener('click', () => {
      cartModal.classList.add('hidden');
    });

    // Cerrar al hacer clic fuera del contenido
    window.addEventListener('click', (e) => {
      if (e.target === cartModal) {
        cartModal.classList.add('hidden');
      }
    });
  </script>

</body>
</html>
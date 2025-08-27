<?php include 'includes/header.php'; ?>
<body class="font-sans antialiased bg-gray-50 text-gray-900">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/modals/modal.php'; ?>
  <?php include 'includes/modals/modaluser.php'; ?>
  <?php include 'includes/modals/modaledit.php'; ?>
  <?php include 'includes/modals/modalReserve.php'; ?>

  <!-- Carrusel full screen -->
  <section class="relative w-full h-screen mt-18 overflow-hidden">
    <div id="autos-carousel" class="relative w-full h-full">

      <!-- Slide 1 -->
      <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100" data-carousel-item>
        <img src="assets/img/Polo/polo.png" alt="Auto 1" class="w-full h-full object-cover brightness-90">

        <!-- Texto integrado -->
        <div class="absolute top-1/3 left-8 md:left-16 text-white space-y-4 animate-fadeIn">
          <h2 class="text-5xl md:text-6xl font-extrabold drop-shadow-2xl">Nuevo Polo</h2>
          <p class="text-lg md:text-xl drop-shadow-lg">Anticipo</p>
          <p class="text-4xl md:text-5xl font-bold drop-shadow-lg">$8.155.000</p>
          <p class="text-xl md:text-2xl drop-shadow-lg">36 cuotas sin interés</p>

          <!-- Botones -->
          <div class="flex flex-col sm:flex-row gap-4 mt-6">
            <a class="openModalConsult px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-xl hover:bg-gray-200 transition transform hover:-translate-y-1">
              Solicitar un asesor
            </a>
            <button class="openModalCustomizeCar px-8 py-3 border-2 border-white text-white font-semibold rounded-full shadow-xl hover:bg-white hover:text-black transition transform hover:-translate-y-1">
              Reservar
            </button>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-carousel-item>
        <img src="assets/img/Polo/atras_polo.png" alt="Auto 2" class="w-full h-full object-cover brightness-90">

        <!-- Texto integrado -->
        <div class="absolute top-1/3 left-8 md:left-16 text-white space-y-4 animate-fadeIn">
          <h2 class="text-5xl md:text-6xl font-extrabold drop-shadow-2xl">Nuevo Polo - Vista Trasera</h2>
          <p class="text-lg md:text-xl drop-shadow-lg">Anticipo</p>
          <p class="text-4xl md:text-5xl font-bold drop-shadow-lg">$8.155.000</p>
          <p class="text-xl md:text-2xl drop-shadow-lg">36 cuotas sin interés</p>
          
          <!-- Botones -->
          <div class="flex flex-col sm:flex-row gap-4 mt-6">
            <a class="openModalConsult px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-xl hover:bg-gray-200 transition transform hover:-translate-y-1">
              Solicitar un asesor
            </a>
            <button class="openModalCustomizeCar px-8 py-3 border-2 border-white text-white font-semibold rounded-full shadow-xl hover:bg-white hover:text-black transition transform hover:-translate-y-1">
              Reservar
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Hero blanca con info y multimedia -->
  <section id="info" class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 class="text-5xl md:text-7xl font-bold mb-10 text-gray-900 text-center md:text-left">VM Polo Track</h1>
      <div class="grid md:grid-cols-2 gap-10 items-center">
        <div class="space-y-4 text-gray-800">
          <p class="text-lg md:text-xl">Poné primera y animate a descubrir la ciudad conduciendo el Polo Track. Con un diseño moderno y exclusivo, transmite la seguridad que necesitás para sentirte siempre a gusto. Viví nuevas experiencias al volante con un vehículo confiable y duradero.</p>

          <p class="text-gray-700 mt-4"><strong>Motor:</strong> 1.6 MSI, 110 CV, 155 Nm</p>
          <p class="text-gray-700"><strong>Transmisión:</strong> Manual 5 marchas</p>
          <p class="text-gray-700"><strong>Dimensiones:</strong> Largo: 4.079 mm, Baúl: 300 L</p>
          <p class="text-gray-700"><strong>Seguridad:</strong> 4 airbags, ESP, ABS, ISOFIX</p>
          <p class="text-gray-700"><strong>Confort:</strong> Media Plus o VM Play (2025), volante multifunción</p>
          <p class="text-gray-700"><strong>Garantía:</strong> 3 años o 100.000 km</p>
        </div>

        <div>
          <!-- Manteniendo la misma cantidad de imágenes de antes -->
          <img src="assets/img/Polo/dentro_polo.png" alt="Imagen 1" class="w-full h-68 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
        </div>
      </div>

      <br>
      <div class="grid grid-cols-2 gap-9">
        <img src="assets/img/Polo/polo_delante.png" alt="Imagen 2" class="w-full h-86 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
        <img src="assets/img/Polo/polo_interior.png" alt="Imagen 3" class="w-full h-86 object-cover rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
      </div>

      <div class="mt-8 overflow-hidden rounded-lg shadow-2xl">
        <video class="w-full rounded-lg shadow-lg" controls>
          <source src="assets/img/Polo/polo_video.mp4" type="video/mp4">
          Tu navegador no soporta el video.
        </video>
      </div>
    </div>
  </section>

  <!-- Productos -->
  <section id="galeria" class="relative py-16 text-white overflow-hidden">
    <!-- Fondo desenfocado -->
    <div class="absolute inset-0">
      <img src="assets/img/casino.png" alt="Fondo" class="w-full h-full object-cover filter blur-lg brightness-50 scale-110">
    </div>

    <!-- Contenido de la galería -->
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-5xl font-bold mb-12 text-center">Nuestras Ofertas</h2>

      <!-- Contenedor de productos 1 -->
      <div class="flex flex-col md:flex-row justify-center gap-8">

        <!-- Producto 1 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/polo.png" alt="Polo" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$8.155.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

        <!-- Producto 2 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/amarok.png" alt="Amarok" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$13.200.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

        <!-- Producto 3 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/amarok_v6.png" alt="Amarok V6" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$5.300.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

        <!-- Producto 4 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/t-cross.png" alt="T-Cross" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$8.600.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Contenedor de productos 2 -->
      <div class="flex flex-col md:flex-row justify-center gap-8 mt-12">

        <!-- Producto 5 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/virtus.png" alt="Virtus" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$13.155.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

        <!-- Producto 6 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/taos.png" alt="Taos" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$5.155.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

        <!-- Producto 7 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/nivus.png" alt="Nivus" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$6.155.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

        <!-- Producto 8 -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
          <img src="assets/img/Productos/vento.png" alt="Vento" class="mx-auto mt-4 w-64 h-48 object-cover rounded-lg">
          <div class="p-5 text-center">
            <h5 class="text-3xl tracking-tight text-black font-semibold">Anticipo</h5>
            <h5 class="text-3xl font-bold tracking-tight text-black">$12.155.000</h5>
            <div class="flex flex-col gap-4 mt-6">
              <a href="#asesor" class="px-8 py-3 bg-blue-700 text-white font-semibold rounded-full shadow-lg hover:bg-blue-800 transition">Ver Más</a>
              <a href="#whatsapp" class="openModalCustomizeCar px-8 py-3 border-2 border-blue-700 text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">Reservar</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Scripts -->

  <!-- Carrusel automático -->
  <script>
    const slides = document.querySelectorAll('[data-carousel-item]');
    let current = 0;
    setInterval(() => {
      slides[current].classList.remove('opacity-100');
      slides[current].classList.add('opacity-0');
      current = (current + 1) % slides.length;
      slides[current].classList.remove('opacity-0');
      slides[current].classList.add('opacity-100');
    }, 7000);
  </script>

  <!-- Navbar scroll -->
  <script>
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('#navbar .nav-link');
    if (navbar) {
      const applyScrollState = () => {
        const scrolled = window.scrollY > 80;
        navbar.classList.toggle('bg-gray-900', scrolled);
        navbar.classList.toggle('shadow-md', scrolled);
        navbar.classList.toggle('bg-transparent', !scrolled);
        navLinks.forEach(link => {
          if(scrolled){
            link.classList.remove('text-gray','hover:text-blue-300');
            link.classList.add('text-white','hover:text-gray-200');
          } else {
            link.classList.remove('text-white','hover:text-gray-200');
            link.classList.add('text-gray','hover:text-blue-300');
          }
        });
      };
      applyScrollState();
      window.addEventListener('scroll', applyScrollState);
    }
  </script>

  <!-- Modales -->
  <script>
    // Modal Registro
    const openModalBtns = document.querySelectorAll('.openModal');
    const closeModalBtn = document.getElementById('closeModal');
    const registerModal = document.getElementById('registerModal');
    openModalBtns.forEach(btn => btn.addEventListener('click', () => registerModal.classList.remove('hidden')));
    closeModalBtn.addEventListener('click', () => registerModal.classList.add('hidden'));
    window.addEventListener('click', (e) => { if(e.target===registerModal) registerModal.classList.add('hidden'); });

    // Modal Edit
    const openModalBtnEdit = document.querySelectorAll('.openModalEdit');
    const editModals = document.getElementById('openModalEdit');
    const closeModalBtns = document.getElementById('closeModalBtn');
    openModalBtnEdit.forEach(btn => btn.addEventListener('click', () => editModals.classList.remove('hidden')));
    closeModalBtns.addEventListener('click', () => editModals.classList.add('hidden'));
    window.addEventListener('click', (e) => { if(e.target===editModals) editModals.classList.add('hidden'); });

    // Modal Updates
    const openModalBtnUpdates = document.querySelectorAll('.openModalUpdate');
    const closeModalBtnUpdates = document.getElementById('closeModalUpdate');
    const modalUpdates = document.getElementById('modalUpdates');
    const modalEdit = document.getElementById('openModalEdit');
    openModalBtnUpdates.forEach(btn => btn.addEventListener('click', () => { modalUpdates.classList.remove('hidden'); modalEdit.classList.add('hidden'); }));
    closeModalBtnUpdates.addEventListener('click', () => modalUpdates.classList.add('hidden'));
    window.addEventListener('click', (e) => { if(e.target===modalUpdates) modalUpdates.classList.add('hidden'); });

    // Modal Customize Car
    const openModalBtnCustomizeCar = document.querySelectorAll('.openModalCustomizeCar');
    const closeModalBtnCustomizeCar = document.getElementById('closeModalCustomizeCar');
    const CustomizeCarModal = document.getElementById('modalCustomizeCar');
    openModalBtnCustomizeCar.forEach(btn => btn.addEventListener('click', () => CustomizeCarModal.classList.remove('hidden')));
    closeModalBtnCustomizeCar.addEventListener('click', () => CustomizeCarModal.classList.add('hidden'));
    window.addEventListener('click', (e) => { if(e.target===CustomizeCarModal) CustomizeCarModal.classList.add('hidden'); });

    // Modal Consult
    const openModalBtnConsult = document.querySelectorAll('.openModalConsult');
    const closeModalBtnConsult = document.getElementById('closeModalConsult');
    const ConsultModal = document.getElementById('modalConsult');
    openModalBtnConsult.forEach(btn => btn.addEventListener('click', () => ConsultModal.classList.remove('hidden')));
    closeModalBtnConsult.addEventListener('click', () => ConsultModal.classList.add('hidden'));
    window.addEventListener('click', (e) => { if(e.target===ConsultModal) ConsultModal.classList.add('hidden'); });
  </script>

</body>
</html>

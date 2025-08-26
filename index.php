<?php include 'includes/header.php'; ?>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/modals/modal.php'; ?>

<!-- Carrusel full screen -->
<!-- Carrusel full screen -->
<section class="relative w-full h-screen mt-18">
  <div id="autos-carousel" class="relative w-full h-full overflow-hidden">
    
    <!-- Slide 1 -->
    <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100" data-carousel-item>
      <img src="assets/img/Polo/polo.png" alt="Auto 1" class="w-full h-full object-cover">

      <!-- Texto integrado -->
      <div class="absolute top-1/3 left-16 text-white space-y-4">
        <h2 class="text-5xl font-extrabold">Nuevo Polo</h2>
        <p class="text-lg">Anticipo</p> 
        <p class="text-4xl font-bold">$8.155.000</p>
        <p class="text-xl">36 cuotas sin interés</p>
        
        <!-- Botones -->
        <div class="flex flex-col sm:flex-row gap-4 mt-6">
          <a id="openModal" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">
            Solicitar un asesor
          </a>
          <a id="openModal" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full shadow-lg hover:bg-white hover:text-black transition">
            Comprar
          </a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-carousel-item>
      <img src="assets/img/Polo/atras_polo.png" alt="Auto 2" class="w-full h-full object-cover">

      <!-- Texto integrado -->
      <div class="absolute top-1/3 left-16 text-white space-y-4">
        <h2 class="text-5xl font-extrabold">Nuevo Polo - Vista Trasera</h2>
        <p class="text-lg">Anticipo</p>
        <p class="text-4xl font-bold">$8.155.000</p>
        <p class="text-xl">36 cuotas sin interés</p>
        
        <!-- Botones -->
        <div class="flex flex-col sm:flex-row gap-4 mt-6">
          <a id="openModal" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition">
            Solicitar un asesor
          </a>
          <button id="openModal" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full shadow-lg hover:bg-white hover:text-black transition">
            Comprar
          </button>
          <a id="openModal" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full shadow-lg hover:bg-white hover:text-black transition">
            Comprar
          </a>
        </div>
      </div>
    </div>

  </div>

  
</section>


  <!-- Hero blanca con info y multimedia -->
  <section id="info" class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 class="text-7xl mb-8">VM Polo Track</h1>
      <div class="grid md:grid-cols-2 gap-10">
        <div class="space-y-4">
          <p>Poné primera y animate a descubrir la ciudad conduciendo el Polo Track.
Con un diseño moderno y exclusivo, transmite la seguridad que necesitás para sentirte siempre a gusto.
Viví nuevas experiencias al volante con un vehículo confiable y duradero.</p>
          <p class="text-gray-700">Motor
1.6 MSI, 110 CV, 155 Nm</p>
          <p class="text-gray-700">Transmisión
Manual 5 marchas</p>
          <p class="text-gray-700">Dimensiones
Largo: 4.079 mm, Baúl: 300 L</p>
          <p class="text-gray-700">Seguridad
4 airbags, ESP, ABS, ISOFIX</p>
       <p class="text-gray-700">Confort
Media Plus o VW Play (2025), volante multifunción</p>
<p class="text-gray-700">Garantía
3 años o 100.000 km</p>
       </div>
        <div>
          <img src="assets\img\Polo\dentro_polo.png" alt="Imagen 1" class="w-full h-68 object-cover rounded-lg shadow-lg">
        </div>
      </div>
      <br>
      <div class="grid grid-cols-2 gap-9">
          <img src="assets\img\Polo\polo_delante.png" alt="Imagen 1" class="w-full h-86 object-cover rounded-lg shadow-lg">
          <img src="assets\img\Polo\polo_interior.png" alt="Imagen 2" class="w-full h-86 object-cover rounded-lg shadow-lg">
        </div>
      <div class="mt-8">
        <video class="w-full rounded-lg shadow-lg" controls>
          <source src="assets\img\Polo\polo_video.mp4" type="video/mp4">
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
    <h2 class="text-5xl font-bold mb-8 text-center">Nuestras Ofertas</h2>

    <!-- Contenedor de productos -->
    <div class="flex flex-col md:flex-row justify-center gap-8">

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/polo.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$8.155.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/amarok.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$13.200.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/amarok_v6.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$5.300.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/t-cross.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$8.600.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

    </div>
  <br>
    <!-- Contenedor de productos 2 -->
    <div class="flex flex-col md:flex-row justify-center gap-8">

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/virtus.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$13.155.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/taos.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$5.155.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/nivus.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$6.155.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

      <!-- Producto 1 -->
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-2xl overflow-hidden">
        <div class="w-full">
          <img src="assets/img/Productos/vento.png" alt="logo" class="mx-auto">
        </div>
        <div class="p-5">
          <h5 class="mb-2 text-3xl tracking-tight text-black text-center">Anticipo</h5>
          <h5 class="mb-2 text-3xl font-bold tracking-tight text-black text-center">$12.155.000</h5>
          <div class="flex flex-col gap-4 mt-6">
            <a href="#asesor" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition text-center">
              Ver Mas
            </a>
            <a href="#whatsapp" class="px-8 py-3 border-2 border-blue text-black font-semibold rounded-full shadow-lg hover:bg-gray-200 hover:text-black transition text-center">
              Comprar
            </a>
          </div>
        </div>
      </div>

    </div>
    
  </div>
</section>





  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Script carrusel automatico -->
  <script>
    const slides = document.querySelectorAll('[data-carousel-item]');
    let current = 0;
    setInterval(() => {
      slides[current].classList.remove('opacity-100');
      slides[current].classList.add('opacity-0');
      current = (current + 1) % slides.length;
      slides[current].classList.remove('opacity-0');
      slides[current].classList.add('opacity-100');
    }, 7000); // Cambia cada 10 segundos
  </script>

<script>
  const navbar = document.getElementById('navbar');
  const navLinks = document.querySelectorAll('#navbar .nav-link');

  if (navbar) {
    const applyScrollState = () => {
      const scrolled = window.scrollY > 80;

      // Cambiar fondo y sombra de la navbar
      navbar.classList.toggle('bg-blue-600', scrolled);
      navbar.classList.toggle('shadow-md', scrolled);
      navbar.classList.toggle('bg-transparent', !scrolled);

      // Cambiar color de los links
      navLinks.forEach(link => {
        if(scrolled) {
          link.classList.remove('text-gray', 'hover:text-blue-300');
          link.classList.add('text-white', 'hover:text-gray-200');
        } else {
          link.classList.remove('text-white', 'hover:text-gray-200');
          link.classList.add('text-gray', 'hover:text-blue-300');
        }
      });
    };

    applyScrollState();
    window.addEventListener('scroll', applyScrollState);
  }
</script>



  <!-- Script para abrir/cerrar modal -->
<script>
  const openModalBtn = document.getElementById('openModal');
  const closeModalBtn = document.getElementById('closeModal');
  const registerModal = document.getElementById('registerModal');

  openModalBtn.addEventListener('click', () => {
    registerModal.classList.remove('hidden');
  });

  closeModalBtn.addEventListener('click', () => {
    registerModal.classList.add('hidden');
  });

  // Cerrar modal al hacer clic fuera
  window.addEventListener('click', (e) => {
    if(e.target === registerModal) {
      registerModal.classList.add('hidden');
    }
  });
</script>
</body>
</html>

<?php include 'includes/header.php'; ?>

<body class="font-sans antialiased bg-gray-50 text-gray-900">
  
  <nav id="chat-navbar" class="bg-gray-900 text-white shadow-lg fixed top-0 w-full z-50 transition-all duration-300 ease-in-out p-2">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-4">
        <button id="toggle-sidebar" class="md:hidden p-2 rounded-full hover:bg-gray-800 transition">
          <i class="fa-solid fa-bars text-xl"></i>
        </button>
        <a href="index.php" class="text-white text-2xl font-bold">
          <i class="fa-solid fa-car-side text-brand-500 mr-2"></i> Volksmotor
        </a>
      </div>
      <div class="flex items-center space-x-6">
        <a href="index.php" class="hover:text-brand-300 transition nav-link">
          <i class="fa-solid fa-house mr-1"></i> Inicio
        </a>
        <a href="#" class="hover:text-brand-300 transition nav-link">
          <i class="fa-solid fa-circle-info mr-1"></i> Información
        </a>
        <a href="#" class="hover:text-brand-300 transition nav-link">
          <i class="fa-solid fa-phone mr-1"></i> Contacto
        </a>
      </div>
    </div>
  </nav>

  <div class="flex h-screen pt-16">
    
    <div id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition-transform duration-300 ease-in-out bg-gray-800 text-white w-64 p-4 flex flex-col z-40 shadow-xl">
      <h2 class="text-xl font-bold mb-6 flex items-center">
        <i class="fa-solid fa-comments text-brand-500 mr-2"></i> Mis Chats
      </h2>
      <ul id="conversation-list" class="space-y-3 overflow-y-auto flex-1">
        <li data-conversation-id="1" class="flex items-center p-3 rounded-xl cursor-pointer bg-gray-700 hover:bg-gray-600 transition-all shadow-md">
          <div class="w-10 h-10 rounded-full bg-brand-500 flex items-center justify-center text-white mr-3">
            <i class="fa-solid fa-user-tie text-lg"></i>
          </div>
          <div class="flex-1">
            <div class="font-semibold text-sm">Asesor de Ventas</div>
            <div class="text-xs text-gray-400 truncate">El nuevo Polo Track...</div>
          </div>
          <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
        </li>
        <li data-conversation-id="2" class="flex items-center p-3 rounded-xl cursor-pointer hover:bg-gray-600 transition-all">
          <div class="w-10 h-10 rounded-full bg-brand-700 flex items-center justify-center text-white mr-3">
            <i class="fa-solid fa-screwdriver-wrench text-lg"></i>
          </div>
          <div class="flex-1">
            <div class="font-semibold text-sm">Soporte Técnico</div>
            <div class="text-xs text-gray-400 truncate">El problema con el formulario...</div>
          </div>
        </li>
      </ul>
      
      <button id="new-chat-btn" class="mt-6 px-4 py-3 bg-brand-600 text-white rounded-xl font-semibold hover:bg-brand-700 transition-all w-full shadow-lg">
        <i class="fa-solid fa-plus mr-2"></i> Nueva Conversación
      </button>
    </div>

    <div class="flex flex-col flex-1 bg-white rounded-lg shadow-2xl m-4 md:m-8 overflow-hidden transform transition-all duration-300 ease-in-out">
      
      <div class="bg-gray-100 px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <div class="flex items-center">
          <div class="relative">
            <img src="assets\img\sin_perfil.png" alt="Asesor" class="w-12 h-12 rounded-full mr-4 border-2 border-brand-500">
            <span class="absolute bottom-1 right-3 w-3 h-3 bg-green-500 rounded-full border-2 border-white animate-pulse"></span>
          </div>
          <div>
            <h2 id="chat-title" class="text-xl font-bold text-gray-800">Asesor de Ventas</h2>
            <p id="chat-status" class="text-sm text-green-600 font-semibold">En línea</p>
          </div>
        </div>
        <div class="flex space-x-4 text-gray-500">
          <a href="tel:+5491112345678" class="hover:text-brand-500 transition-all text-2xl" title="Llamar"><i class="fa-solid fa-phone"></i></a>
          <button id="end-chat-btn" class="hover:text-red-500 transition-all text-2xl" title="Finalizar chat"><i class="fa-solid fa-right-from-bracket"></i></button>
        </div>
      </div>

      <div id="chat-messages" class="flex-1 p-6 overflow-y-auto space-y-4 bg-gray-50">
        <div class="flex justify-start" data-aos="fade-right">
          <div class="bg-blue-100 text-blue-900 p-4 rounded-b-xl rounded-tr-xl shadow-md max-w-sm">
            <p>¡Hola! Soy tu asesor de ventas de Volksmotor. ¿En qué puedo ayudarte hoy?</p>
          </div>
        </div>
        <div class="flex justify-end" data-aos="fade-left">
          <div class="bg-brand-500 text-white p-4 rounded-b-xl rounded-tl-xl shadow-md max-w-sm">
            <p>Hola, me gustaría saber más sobre el Polo Track.</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-4 border-t border-gray-200">
        <form id="chat-form" class="flex items-center space-x-4">
          <input type="text" id="chat-input" class="flex-1 px-4 py-3 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all" placeholder="Escribe tu mensaje...">
          <button type="submit" class="bg-brand-700 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-brand-800 transition-all shadow-lg">
            <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>

    </div>
  </div>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>AOS.init({ once: true, duration: 800, offset: 120 });</script>

  <script>
    $(document).ready(function() {
      // Manejar el toggle del sidebar en móviles
      $('#toggle-sidebar').on('click', function() {
        $('#sidebar').toggleClass('-translate-x-full');
      });

      // Manejar la selección de conversación en el sidebar
      $('#conversation-list li').on('click', function() {
        // Eliminar clase activa de todos
        $('#conversation-list li').removeClass('bg-gray-700');
        // Añadir clase activa al seleccionado
        $(this).addClass('bg-gray-700');
        
        const title = $(this).find('.font-semibold').text();
        $('#chat-title').text(title);
        $('#chat-messages').html(`
          <div class="flex justify-start" data-aos="fade-right">
            <div class="bg-blue-100 text-blue-900 p-4 rounded-b-xl rounded-tr-xl shadow-md max-w-sm">
              <p>Has cambiado a la conversación con ${title}.</p>
            </div>
          </div>
        `);
        
        // Cierra el sidebar en móviles
        if ($(window).width() < 768) {
          $('#sidebar').addClass('-translate-x-full');
        }
      });

      // Manejar el envío de mensajes
      $('#chat-form').on('submit', function(e) {
        e.preventDefault();
        const message = $('#chat-input').val().trim();
        if (message === '') return;

        const messageHtml = `
          <div class="flex justify-end" data-aos="fade-left">
            <div class="bg-brand-500 text-white p-4 rounded-b-xl rounded-tl-xl shadow-md max-w-sm">
              <p>${message}</p>
            </div>
          </div>
        `;
        $('#chat-messages').append(messageHtml);
        $('#chat-input').val('');
        $('#chat-messages').scrollTop($('#chat-messages')[0].scrollHeight);
      });

      // Manejar el botón de finalizar chat
      $('#end-chat-btn').on('click', function() {
        Swal.fire({
          title: 'Finalizar Conversación',
          text: '¿Estás seguro de que quieres terminar la conversación actual?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, finalizar',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Finalizada',
              'La conversación ha sido cerrada.',
              'success'
            );
            $('#chat-messages').html(`
              <div class="flex justify-start" data-aos="fade-right">
                <div class="bg-gray-200 text-gray-800 p-4 rounded-xl shadow-md max-w-sm">
                  <p>La conversación ha sido finalizada.</p>
                </div>
              </div>
            `);
          }
        });
      });
      
      // Manejar el botón de nueva conversación
      $('#new-chat-btn').on('click', function() {
        Swal.fire({
          title: 'Iniciar Nueva Conversación',
          text: '¿Con qué departamento te gustaría hablar?',
          icon: 'question',
          input: 'select',
          inputOptions: {
            'ventas': 'Asesor de Ventas',
            'soporte': 'Soporte Técnico',
            'administracion': 'Administración'
          },
          inputPlaceholder: 'Selecciona un departamento',
          showCancelButton: true,
          confirmButtonText: 'Iniciar'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              '¡Conversación iniciada!',
              `Has iniciado una nueva conversación con ${result.value}.`,
              'success'
            );
            // Aquí se agregaría la lógica para crear una nueva conversación en el sidebar
          }
        });
      });

    });
  </script>

</body>
</html>
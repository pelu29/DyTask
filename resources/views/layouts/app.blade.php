<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c7a61fa60f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

<!-- HEADER -->
<header class="bg-sky-950">
    <nav class="flex flex-wrap items-center justify-between max-w-7xl m-auto px-4 py-8">
        <!-- Logo -->
        <div class="w-1/2 md:w-auto">
            <img src="https://imgs.search.brave.com/xWEex0RnjCoTAxnBqvHVDeU3ujHlCRpl44TEnWRgPFM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9lbnZv/eWVyLmlvL2ltZy9n/aXRsYWIuc3Zn" class="w-40" alt="logo">
        </div>

        <!-- Botón hamburguesa -->
        <button id="menu-toggle" class="text-white text-2xl md:hidden">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Menú -->
        <ul id="menu" class="hidden w-full md:flex md:items-center md:justify-end md:w-auto gap-6 text-white text-lg pt-4 md:pt-0">
            <li><a href="/">Inicio <i class="fas fa-caret-down text-sm"></i></a></li>
            <li><a href="/redireccion">Panel <i class="fas fa-caret-down text-sm"></i></a></li>
            <li><a href="#objetivo">Objetivos <i class="fas fa-caret-down text-sm"></i></a></li>
            <li><a href="#ventajas">Ventajas <i class="fas fa-caret-down text-sm"></i></a></li>
        </ul>
    </nav>
</header>

<!-- CONTENIDO -->
@yield('content')

<!-- FOOTER -->
<footer class="bg-sky-950 text-white mt-10">
  <div class="max-w-6xl mx-auto px-4 py-10">
    <div class="flex flex-col md:flex-row justify-between gap-12">
      <!-- Compañía -->
      <div>
        <h2 class="text-lg font-bold mb-4 flex items-center gap-2">
          <i class="fas fa-building"></i> Compañía
        </h2>
        <ul class="space-y-2">
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-info-circle mr-2"></i> Acerca de nosotros
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-bullseye mr-2"></i> Objetivos
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-search mr-2"></i> Lo que buscamos
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-heart mr-2"></i> Lo que queremos
          </li>
        </ul>
      </div>

      <!-- Soporte -->
      <div>
        <h2 class="text-lg font-bold mb-4 flex items-center gap-2">
          <i class="fas fa-life-ring"></i> Soporte
        </h2>
        <ul class="space-y-2">
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-envelope mr-2"></i> Contáctanos y consúltanos
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-mobile-alt mr-2"></i> Nuestras apps y actualizaciones
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-question-circle mr-2"></i> Preguntas frecuentes
          </li>
        </ul>
      </div>

      <!-- Otros -->
      <div>
        <h2 class="text-lg font-bold mb-4 flex items-center gap-2">
          <i class="fas fa-ellipsis-h"></i> Otros
        </h2>
        <ul class="space-y-2">
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-star mr-2"></i> Elemento 1
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-star mr-2"></i> Elemento 2
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-star mr-2"></i> Elemento 3
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-star mr-2"></i> Elemento 4
          </li>
          <li class="hover:text-sky-400 transition-colors cursor-pointer">
            <i class="fas fa-star mr-2"></i> Elemento 5
          </li>
        </ul>
      </div>
    </div>

    <!-- Redes Sociales -->
    <div class="mt-10 border-t border-white/20 pt-6 text-center">
      <p class="mb-4">Sígueme en redes</p>
      <div class="flex justify-center gap-6 text-xl">
        <a href="#" class="hover:text-sky-400 transition-colors"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="hover:text-sky-400 transition-colors"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-sky-400 transition-colors"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-sky-400 transition-colors"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</footer>

<script>
    const toggleBtn = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggleBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
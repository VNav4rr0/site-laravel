<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website com Background</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body class="w-full h-full" style="">
<div class="container">
<nav class="bg-slate-800 shadow-lg transition-all">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <a href="#" class="text-white text-xl font-bold">Logo</a>
            </div>
            <div class="flex md:hidden">
                <button id="menuButton" class="text-gray-300 hover:text-white focus:outline-none focus:text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden md:block transition-all">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contato</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Noticia</a>

                </div>
            </div>
        </div>
    </div>

    <!-- menu responsivo -->
    <div id="menu" class="hidden md:hidden transition-all">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sobre</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contato</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Noticia</a>
        </div>
    </div>
</nav>
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Notícias</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea aliquam dolorum asperiores magnam.</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Aumente sua taxa de conversão</a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Eu me sinto voluptuoso. O erro resulta em culpa elegendi. Hic vel total vitae illo. Non aliquid explicabo necessitatibus unde. Sed exerciem placeat consectetur nulla deserunt vel. Iusto corrupti dita.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Michael Foster
              </a>
            </p>
            <p class="text-gray-600">Empreedendor</p>
          </div>
        </div>
      </article>

      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Aumente sua taxa de conversão</a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Eu me sinto voluptuoso. O erro resulta em culpa elegendi. Hic vel total vitae illo. Non aliquid explicabo necessitatibus unde. Sed exerciem placeat consectetur nulla deserunt vel. Iusto corrupti dita.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Michael Foster
              </a>
            </p>
            <p class="text-gray-600">Empreedendor</p>
          </div>
        </div>
      </article>

      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Aumente sua taxa de conversão</a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Eu me sinto voluptuoso. O erro resulta em culpa elegendi. Hic vel total vitae illo. Non aliquid explicabo necessitatibus unde. Sed exerciem placeat consectetur nulla deserunt vel. Iusto corrupti dita.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Michael Foster
              </a>
            </p>
            <p class="text-gray-600">Empreedendor</p>
          </div>
        </div>
      </article>
    </div>
  </div>
  
</div>
</body>
</html>


<script>
    const menuButton = document.querySelector('.flex.md\\:hidden button');

    const responsiveMenu = document.querySelector('.hidden.md\\:hidden');

    menuButton.addEventListener('click', function() {
        responsiveMenu.classList.toggle('hidden');
    });
</script>

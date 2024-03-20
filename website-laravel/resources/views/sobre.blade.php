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
<div class="relative isolate overflow-hidden sm:py-32">
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0 border-solid	border-l-4 border-slate-500 px-5">
      <h2 class="text-4xl font-bold tracking-tight text-slate-800 sm:text-6xl">Sobre Nós</h2>
      <p class="mt-6 text-lg leading-8 text-slate-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptate, deleniti, ratione eos labore tempora totam similique, vel dolorum ullam rem ab laboriosam? Voluptate eaque quas perferendis reprehenderit optio perspiciatis.</p>
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse  bg-slate-800 text-white px-2 py-3 w-60 text-center rounded-2xl shadow-2xl">
          <dt class="text-base leading-7 ">Escritórios em todo o mundo</dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight ">12</dd>
        </div>
        <div class="flex flex-col-reverse bg-slate-800 text-white px-2 py-3 w-60 text-center rounded-2xl shadow-2xl">
          <dt class="text-base leading-7 ">Colegas em tempo integral</dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight ">300+</dd>
        </div>
        <div class="flex flex-col-reverse bg-slate-800 text-white px-2 py-3 w-60 text-center rounded-2xl shadow-2xl">
          <dt class="text-base leading-7 ">Horas por semana</dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight ">40</dd>
        </div>
        <div class="flex flex-col-reverse bg-slate-800 text-white px-2 py-3 w-60 text-center rounded-2xl shadow-2xl">
          <dt class="text-base leading-7 ">Folga Remunerada</dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight ">Ilimitada</dd>
        </div>
      </dl>
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

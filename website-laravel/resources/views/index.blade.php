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
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sobre</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contato</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Noticia</a>
        </div>
    </div>
</nav>


  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 b">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white	 sm:text-6xl">Website usando Laravel</h1>
        <p class="mt-6 text-lg leading-8 text-white	">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
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
<style>
    @keyframes move {
    100% {
        transform: translate3d(0, 0, 1px) rotate(360deg);
    }
}

.background {
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    background: #010ca2;
    overflow: hidden;
    z-index: -10000;
}

.background span {
    width: 50vmin;
    height: 50vmin;
    border-radius: 50vmin;
    backface-visibility: hidden;
    position: absolute;
    animation: move;
    animation-duration: 45;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}


.background span:nth-child(0) {
    color: #4d41fb;
    top: 22%;
    left: 7%;
    animation-duration: 13s;
    animation-delay: -14s;
    transform-origin: 10vw -9vh;
    box-shadow: 100vmin 0 12.560347311162612vmin currentColor;
}
.background span:nth-child(1) {
    color: #2392fb;
    top: 59%;
    left: 8%;
    animation-duration: 25s;
    animation-delay: -8s;
    transform-origin: 11vw -18vh;
    box-shadow: -100vmin 0 12.62356692941314vmin currentColor;
}
.background span:nth-child(2) {
    color: #2392fb;
    top: 16%;
    left: 62%;
    animation-duration: 22s;
    animation-delay: -27s;
    transform-origin: 23vw -8vh;
    box-shadow: 100vmin 0 12.711070964808318vmin currentColor;
}
.background span:nth-child(3) {
    color: #026af2;
    top: 52%;
    left: 51%;
    animation-duration: 28s;
    animation-delay: -29s;
    transform-origin: 21vw 21vh;
    box-shadow: 100vmin 0 12.928311996015486vmin currentColor;
}
.background span:nth-child(4) {
    color: #4d41fb;
    top: 68%;
    left: 4%;
    animation-duration: 29s;
    animation-delay: -24s;
    transform-origin: -22vw -23vh;
    box-shadow: -100vmin 0 13.473658201746664vmin currentColor;
}
.background span:nth-child(5) {
    color: #2392fb;
    top: 22%;
    left: 47%;
    animation-duration: 41s;
    animation-delay: -9s;
    transform-origin: -21vw 16vh;
    box-shadow: 100vmin 0 13.31535292452157vmin currentColor;
}
.background span:nth-child(6) {
    color: #2392fb;
    top: 49%;
    left: 4%;
    animation-duration: 32s;
    animation-delay: -2s;
    transform-origin: -1vw 10vh;
    box-shadow: -100vmin 0 12.73015177148922vmin currentColor;
}
.background span:nth-child(7) {
    color: #026af2;
    top: 31%;
    left: 38%;
    animation-duration: 44s;
    animation-delay: -13s;
    transform-origin: -12vw -19vh;
    box-shadow: 100vmin 0 13.271167743236617vmin currentColor;
}
.background span:nth-child(8) {
    color: #4d41fb;
    top: 65%;
    left: 22%;
    animation-duration: 17s;
    animation-delay: -50s;
    transform-origin: 19vw 18vh;
    box-shadow: -100vmin 0 12.594316249886667vmin currentColor;
}
.background span:nth-child(9) {
    color: #4d41fb;
    top: 63%;
    left: 34%;
    animation-duration: 22s;
    animation-delay: -2s;
    transform-origin: 9vw 21vh;
    box-shadow: -100vmin 0 13.169485799247354vmin currentColor;
}
.background span:nth-child(10) {
    color: #4d41fb;
    top: 89%;
    left: 24%;
    animation-duration: 47s;
    animation-delay: -5s;
    transform-origin: -18vw 2vh;
    box-shadow: 100vmin 0 12.929510710386637vmin currentColor;
}
.background span:nth-child(11) {
    color: #2392fb;
    top: 80%;
    left: 97%;
    animation-duration: 23s;
    animation-delay: -20s;
    transform-origin: -14vw 4vh;
    box-shadow: -100vmin 0 12.603012054936144vmin currentColor;
}
.background span:nth-child(12) {
    color: #2392fb;
    top: 16%;
    left: 17%;
    animation-duration: 34s;
    animation-delay: -28s;
    transform-origin: -21vw 15vh;
    box-shadow: 100vmin 0 13.046851196013005vmin currentColor;
}
.background span:nth-child(13) {
    color: #026af2;
    top: 9%;
    left: 42%;
    animation-duration: 28s;
    animation-delay: -36s;
    transform-origin: 17vw 6vh;
    box-shadow: -100vmin 0 13.128036130252825vmin currentColor;
}
.background span:nth-child(14) {
    color: #4d41fb;
    top: 73%;
    left: 44%;
    animation-duration: 18s;
    animation-delay: -6s;
    transform-origin: 7vw -15vh;
    box-shadow: -100vmin 0 13.165834335500707vmin currentColor;
}
.background span:nth-child(15) {
    color: #4d41fb;
    top: 58%;
    left: 12%;
    animation-duration: 8s;
    animation-delay: -13s;
    transform-origin: 6vw -13vh;
    box-shadow: 100vmin 0 12.882660982393503vmin currentColor;
}
.background span:nth-child(16) {
    color: #026af2;
    top: 47%;
    left: 95%;
    animation-duration: 36s;
    animation-delay: -17s;
    transform-origin: -19vw 15vh;
    box-shadow: -100vmin 0 12.698768245208583vmin currentColor;
}
.background span:nth-child(17) {
    color: #2392fb;
    top: 48%;
    left: 9%;
    animation-duration: 47s;
    animation-delay: -32s;
    transform-origin: 4vw 15vh;
    box-shadow: -100vmin 0 13.173791523027981vmin currentColor;
}
.background span:nth-child(18) {
    color: #4d41fb;
    top: 60%;
    left: 42%;
    animation-duration: 11s;
    animation-delay: -39s;
    transform-origin: 21vw -21vh;
    box-shadow: 100vmin 0 12.925326300192438vmin currentColor;
}
.background span:nth-child(19) {
    color: #2392fb;
    top: 86%;
    left: 53%;
    animation-duration: 38s;
    animation-delay: -48s;
    transform-origin: 23vw -12vh;
    box-shadow: -100vmin 0 12.707601490212088vmin currentColor;
}
.background span:nth-child(20) {
    color: #2392fb;
    top: 39%;
    left: 6%;
    animation-duration: 37s;
    animation-delay: -14s;
    transform-origin: -12vw -18vh;
    box-shadow: 100vmin 0 13.061814656488076vmin currentColor;
}
.background span:nth-child(21) {
    color: #2392fb;
    top: 11%;
    left: 16%;
    animation-duration: 37s;
    animation-delay: -46s;
    transform-origin: -4vw -8vh;
    box-shadow: 100vmin 0 13.201856322556614vmin currentColor;
}
.background span:nth-child(22) {
    color: #2392fb;
    top: 92%;
    left: 46%;
    animation-duration: 43s;
    animation-delay: -19s;
    transform-origin: -12vw 4vh;
    box-shadow: -100vmin 0 13.302006855239835vmin currentColor;
}
.background span:nth-child(23) {
    color: #026af2;
    top: 73%;
    left: 94%;
    animation-duration: 49s;
    animation-delay: -29s;
    transform-origin: -14vw -20vh;
    box-shadow: 100vmin 0 12.72543157520232vmin currentColor;
}
.background span:nth-child(24) {
    color: #2392fb;
    top: 55%;
    left: 18%;
    animation-duration: 39s;
    animation-delay: -35s;
    transform-origin: 21vw -16vh;
    box-shadow: -100vmin 0 13.081411042086238vmin currentColor;
}
.background span:nth-child(25) {
    color: #4d41fb;
    top: 89%;
    left: 88%;
    animation-duration: 40s;
    animation-delay: -43s;
    transform-origin: -23vw -24vh;
    box-shadow: 100vmin 0 13.114510842188823vmin currentColor;
}
.background span:nth-child(26) {
    color: #026af2;
    top: 51%;
    left: 34%;
    animation-duration: 20s;
    animation-delay: -34s;
    transform-origin: 8vw 13vh;
    box-shadow: 100vmin 0 12.725733177297393vmin currentColor;
}
.background span:nth-child(27) {
    color: #2392fb;
    top: 24%;
    left: 93%;
    animation-duration: 14s;
    animation-delay: -49s;
    transform-origin: -22vw 14vh;
    box-shadow: 100vmin 0 13.15960972219025vmin currentColor;
}
.background span:nth-child(28) {
    color: #2392fb;
    top: 28%;
    left: 12%;
    animation-duration: 23s;
    animation-delay: -45s;
    transform-origin: -2vw -6vh;
    box-shadow: 100vmin 0 13.147996728730906vmin currentColor;
}
.background span:nth-child(29) {
    color: #4d41fb;
    top: 18%;
    left: 69%;
    animation-duration: 42s;
    animation-delay: -37s;
    transform-origin: 12vw 6vh;
    box-shadow: 100vmin 0 12.65001904990553vmin currentColor;
}
.background span:nth-child(30) {
    color: #4d41fb;
    top: 64%;
    left: 30%;
    animation-duration: 11s;
    animation-delay: -35s;
    transform-origin: -14vw 24vh;
    box-shadow: -100vmin 0 12.940883367789834vmin currentColor;
}
.background span:nth-child(31) {
    color: #4d41fb;
    top: 62%;
    left: 56%;
    animation-duration: 28s;
    animation-delay: -2s;
    transform-origin: -13vw 11vh;
    box-shadow: 100vmin 0 12.851950984136016vmin currentColor;
}
.background span:nth-child(32) {
    color: #2392fb;
    top: 79%;
    left: 14%;
    animation-duration: 32s;
    animation-delay: -26s;
    transform-origin: -17vw -20vh;
    box-shadow: 100vmin 0 13.00656577310745vmin currentColor;
}
.background span:nth-child(33) {
    color: #026af2;
    top: 43%;
    left: 23%;
    animation-duration: 17s;
    animation-delay: -20s;
    transform-origin: -24vw 0vh;
    box-shadow: 100vmin 0 13.123317466669626vmin currentColor;
}
.background span:nth-child(34) {
    color: #026af2;
    top: 42%;
    left: 65%;
    animation-duration: 54s;
    animation-delay: -41s;
    transform-origin: 13vw 11vh;
    box-shadow: -100vmin 0 12.560663995503083vmin currentColor;
}
.background span:nth-child(35) {
    color: #4d41fb;
    top: 30%;
    left: 65%;
    animation-duration: 46s;
    animation-delay: -12s;
    transform-origin: 0vw -14vh;
    box-shadow: 100vmin 0 12.545792849086524vmin currentColor;
}
.background span:nth-child(36) {
    color: #2392fb;
    top: 34%;
    left: 57%;
    animation-duration: 50s;
    animation-delay: -12s;
    transform-origin: 1vw -4vh;
    box-shadow: -100vmin 0 12.774052103930691vmin currentColor;
}
.background span:nth-child(37) {
    color: #026af2;
    top: 98%;
    left: 63%;
    animation-duration: 20s;
    animation-delay: -33s;
    transform-origin: 25vw 22vh;
    box-shadow: 100vmin 0 12.885747128429626vmin currentColor;
}
.background span:nth-child(38) {
    color: #4d41fb;
    top: 80%;
    left: 18%;
    animation-duration: 9s;
    animation-delay: -16s;
    transform-origin: 11vw 12vh;
    box-shadow: 100vmin 0 12.680803078392197vmin currentColor;
}
.background span:nth-child(39) {
    color: #2392fb;
    top: 88%;
    left: 15%;
    animation-duration: 51s;
    animation-delay: -49s;
    transform-origin: -9vw 25vh;
    box-shadow: 100vmin 0 12.675049975125964vmin currentColor;
}
.background span:nth-child(40) {
    color: #4d41fb;
    top: 75%;
    left: 58%;
    animation-duration: 22s;
    animation-delay: -20s;
    transform-origin: 4vw 21vh;
    box-shadow: -100vmin 0 13.179576613689298vmin currentColor;
}
.background span:nth-child(41) {
    color: #2392fb;
    top: 71%;
    left: 52%;
    animation-duration: 39s;
    animation-delay: -17s;
    transform-origin: -9vw -23vh;
    box-shadow: 100vmin 0 13.313043657161508vmin currentColor;
}
.background span:nth-child(42) {
    color: #026af2;
    top: 35%;
    left: 96%;
    animation-duration: 24s;
    animation-delay: -47s;
    transform-origin: -9vw 2vh;
    box-shadow: -100vmin 0 13.37404693259246vmin currentColor;
}
.background span:nth-child(43) {
    color: #2392fb;
    top: 99%;
    left: 13%;
    animation-duration: 6s;
    animation-delay: -15s;
    transform-origin: 13vw 15vh;
    box-shadow: -100vmin 0 13.180757028084786vmin currentColor;
}
.background span:nth-child(44) {
    color: #026af2;
    top: 50%;
    left: 47%;
    animation-duration: 19s;
    animation-delay: -42s;
    transform-origin: -18vw -13vh;
    box-shadow: -100vmin 0 13.086597268985738vmin currentColor;
}
.background span:nth-child(45) {
    color: #026af2;
    top: 58%;
    left: 95%;
    animation-duration: 30s;
    animation-delay: -31s;
    transform-origin: -18vw -10vh;
    box-shadow: -100vmin 0 13.437596871143183vmin currentColor;
}
.background span:nth-child(46) {
    color: #026af2;
    top: 10%;
    left: 94%;
    animation-duration: 36s;
    animation-delay: -32s;
    transform-origin: 4vw 11vh;
    box-shadow: 100vmin 0 12.757315802709307vmin currentColor;
}
.background span:nth-child(47) {
    color: #026af2;
    top: 27%;
    left: 54%;
    animation-duration: 35s;
    animation-delay: -35s;
    transform-origin: 20vw -9vh;
    box-shadow: 100vmin 0 13.485480943807994vmin currentColor;
}
.background span:nth-child(48) {
    color: #026af2;
    top: 77%;
    left: 80%;
    animation-duration: 17s;
    animation-delay: -2s;
    transform-origin: 0vw 20vh;
    box-shadow: -100vmin 0 12.605250418322141vmin currentColor;
}
.background span:nth-child(49) {
    color: #2392fb;
    top: 94%;
    left: 82%;
    animation-duration: 13s;
    animation-delay: -29s;
    transform-origin: -23vw 0vh;
    box-shadow: 100vmin 0 13.38156456783476vmin currentColor;
}

</style>
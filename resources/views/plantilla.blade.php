<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <title>@yield('titulo')</title>

</head>

<body class="min-h-screen flex flex-col justify-between ">
    <header class=" text-white flex flex-row w-full bg-[#7603f5] py-4 px-4 fixed ">
        <div class="flex flex-row max-sm:flex-col">
            <h1 class=" ml-4 font-bold text-[35px] ">SIC</h1>

            <div class="ml-4 mt-auto mb-auto max-sm:hidden" id="nav-content">
                <ul class="flex flex-col sm:flex-row max-sm:w-1/3 gap-4"> <!-- Utilizamos flex-col para dispositivos pequeños y flex-row para dispositivos más grandes -->
                    <li><a href="#">Calificaciones</a></li>
                    <li><a href="#">Alumnos</a></li>
                    <li><a href="#">Materias</a></li>
                    <li><a href="">Grupos</a></li>
                    <li><a href="#">Tutoria</a></li>
                </ul>
            </div>
            <div class="ml-4 mt-auto mb-auto md:hidden sm:hidden hidden " id="nav-content-mobile">
                <ul class="flex flex-col sm:flex-row max-sm:w-1/3 gap-4"> <!-- Utilizamos flex-col para dispositivos pequeños y flex-row para dispositivos más grandes -->
                    <li><a href="#">Calificaciones</a></li>
                    <li><a href="#">Alumnos</a></li>
                    <li><a href="#">Materias</a></li>
                    <li><a href="">Grupos</a></li>
                    <li><a href="#">Tutoria</a></li>
                </ul>
            </div>
            @yield('cabecera')
        </div>
        <div class="ml-auto sm:hidden " id="dropdown">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M2 3.75A.75.75 0 0 1 2.75 3h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75Zm0 4.167a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Zm0 4.166a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Zm0 4.167a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>
            </button>
            <script>
                document.getElementById('dropdown').addEventListener('click', function() {
                    document.getElementById('nav-content-mobile').classList.toggle('hidden');
                });
            </script>
        </div>
    </header>


    <main class="min-h-screen flex-grow flex items-center justify-center">
        @yield('contenido')
    </main>
    <footer class="bg-[#7603f5]  text-white py-4 px-4 ">
        <div class="flex flex-row gap-10 p-2 justify-around">
            <div class="">
                <ul class="">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

            <div>
                <ul>
                    <li><a href="#">Aviso de privacidad</a></li>
                    <li><a href="#">Terminos y condiciones</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-5 ml-2">
            <h1>Todos los derechos resevados </h1>
        </div>
    </footer>
</body>

</html>
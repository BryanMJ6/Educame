<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EDUCAME') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles --><!-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/cards.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>


<body>
    <div id="wrapper app" class="wrapper">


        <!-- Sidebar (Lateral)  -->
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="{{ asset('img/Ecos2.png') }}" alt="" class="logosidebar" />
                </div>

                <ul class="list-unstyled components">
                    <!-- Inicio -->
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-th-large"></i>
                            <i class="opcion">Inicio</i>

                        </a>
                    </li>
                    <!-- Fin Inicio -->

                    <!-- PLANTA DOCENTE -->
                    <li class="{{ Request::is('docentes*') ? 'active' : '' }}">
                        <a href="{{ route('docentes.index') }}">
                            <i class="fas fa-briefcase"></i>
                            <i class="opcion">Planta docente</i>

                        </a>
                    </li>
                    <!-- Fin PLANTA DOCENTE -->

                    <!-- GRADO Y SECCIONES -->
                    <li class="{{ Request::is('grados*') ? 'active' : '' }}">
                        <a href="{{ route('grados.index') }}">
                            <i class="fas fa-id-card"></i>
                            <i class="opcion">Grados y secciones</i>

                        </a>
                    </li>
                    <!-- Fin GRADO Y SECCIONES -->

                    <!-- ASIGNAR DOCENTE -->
                    <li class="{{ Request::is('asistencias*') ? 'active' : '' }}">
                        <a href="{{ route('asistencias.index') }}">
                            <i class="fas fa-users"></i>
                            <i class="opcion">Asignar Docente</i>

                        </a>
                    </li>
                    <!-- Fin ASIGNAR DOCENTE -->

                    <!-- ASISTENCIA -->
                    <li class="{{ Request::is('firmas*') ? 'active' : '' }}">
                        <a href="{{ route('firmas.index') }}">
                            <i class="fas fa-university"></i>
                            <i class="opcion">Asistencia</i>

                        </a>
                    </li>
                    <!-- Fin ASISTENCIA -->

                    <!-- CREAR USUARIO -->
                    <li class="{{ Request::is('usuarios*') || Request::is('roles*') ? 'active' : '' }}">
                        <a href="#Usuario" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-id-card"></i>
                            <i class="opcion">Crear Usuario</i>
                        </a>
                        <ul class="collapse list-unstyled" id="Usuario">
                            <li>
                                <a href="{{ route('usuarios.index') }}">Menu Crear Usuario</a>
                            </li>
                            <li>
                                <a href="{{ route('usuarios.create') }}">Crear Usuario</a>
                            </li>

                            <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                                <a href="{{ route('roles.index') }}">Menu de Roles</a>
                            </li>

                            <li>
                                <a href="{{ route('roles.create') }}">Crear Rol</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Fin CREAR USUARIO -->

                    <!-- ASISTENCIA -->
                    <li class="{{ Request::is('ayudas*') ? 'active' : '' }}">
                        <a href="{{ route('ayudas.index') }}">
                            <i class="fas fa-question-circle"></i>
                            <i class="opcion">Ayuda</i>

                        </a>
                    </li>
                    <!-- Fin ASISTENCIA -->

                    <!-- CERRAR SESION -->
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>{{ __('') }}
                            <i class="opcion">Cerrar Sesión</i>
                        </a>
                    </li>
                    <!-- Fin CERRAR SESION -->
                </ul>
            </nav>
        </div>
        <!-- Fin Sidebar (Lateral)  -->

        <!-- Navbar (Superior)  -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="navbar">
            <div class="navbar-content container-fluid">

                <!-- Scripts -->
                @guest
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @else
                <button type="button" id="sidebarCollapse" class="btn btn-dark ">
                    <i class="fas fa-align-left"></i>
                    <span>Menu</span>
                </button>
                @endguest

                <div class="" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto">

                        </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link user" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> -->
                        @endif
                        @else

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar (Superior)  -->

        <!-- Contenido de las páginas -->
        <!-- NOTA: El elemento main se usa para marcar el contenido principal de una página, el div para crear diviciones o usarse como un contenedor de elementos.
        En este caso se ha colocado un main para identificar el contenido principal de layaud.blade.php y dentro un div como contenedor de todos los elementos de todos los index de 
        las vistas por lo que es innecesario crear un main o div principal dentro de los index a menos que en su contenido se quiera que tenga propiedades diferentes 
        a las establecidas por defecto en style.css -->
        <main class="py-4">
            <div id="content">
                @yield('content')
            </div>
        </main>
        <!-- Fin Contenido de las páginas -->


        <!-- Footer -->
        <!-- <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Sobre Nosotros</h5>
                            <p>Información sobre quiénes somos y nuestros servicios.</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Ayuda y Soporte</h5>
                            <p>Preguntas frecuentes y cómo contactarnos para obtener ayuda.</p>
                        </div>
                    </div>
                </div>
            </footer> -->


    </div>
</body>



<!-- Cambia la clase de los elementos declarados (#sidebar, #navbar, #content) para cambiar su clase entre activo/inactivo en este caso -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #navbar, #content').toggleClass('active');
        });
    });
</script>

<!-- Aplica la animacion de la navbar al ocultar y mostrar al subir y bajar por las páginas -->
<script>
    const navbar = document.getElementById('navbar');
    let prevScrollPos = window.pageYOffset;

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;

        if (prevScrollPos > currentScrollPos) {
            navbar.classList.remove('hidden'); // Muestra la navbar al hacer scroll hacia arriba
        } else {
            navbar.classList.add('hidden'); // Oculta la navbar al hacer scroll hacia abajo
        }

        prevScrollPos = currentScrollPos;
    });
</script>



</html>
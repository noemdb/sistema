<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/4.0.0/css/bootstrap.css') }}" rel="stylesheet">

    <!-- javascript -->
    <script defer src="{{ asset('vendor/fontawesome/5.0.8/svg-with-js/js/fontawesome-all.js') }}"></script>

</head>
<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light md-light">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">

                        @guest

                            <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                            <ul class="navbar-nav mr-auto"></ul>

                        @else

                            <li class="nav-item">

                                <div class="dropdown">
                                  
                                  <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Usuario
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <div class="dropdown-item">
                                            <i class="fas fa-user"></i>
                                            {{ Auth::user()->username }}
                                        </div>
                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-cog"></i>
                                            Configuraciones
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-tachometer-alt"></i>
                                            Dashboard
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-address-card"></i>
                                            Perfil
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-address-book"></i>
                                            Rol
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-tasks"></i>
                                            Actividades
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-comment"></i>
                                            Mensajes
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                </div>

                            </li>

                        @endguest

                    <li class="nav-item">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>
                    {{-- 
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> 
                    --}}

                </ul>

                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>

        </nav>


        <main class="py-4">
        {{-- <main role="main" class="container"> --}}

            @yield('content')

        </main>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/3.2.1/slim/jquery.js') }}"></script>
    <script src="{{ asset('vendor/ajax/popper/1.12.9/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/4.0.0/js/bootstrap.js') }}"></script>

</body>
</html>

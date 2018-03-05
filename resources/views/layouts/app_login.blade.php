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
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/bootstrap/4.0.0/css/bootstrap.css') }}" rel="stylesheet">

    <script defer src="{{ asset('vendor/fontawesome/5.0.8/svg-with-js/js/fontawesome-all.js') }}"></script>

</head>
<body>
    <div id="app">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            @guest
                                {{-- <a class="nav-link" href="{{ route('login') }}">Ingresar</a> --}}
                                {{-- <li><a class="nav-link" href="{{ route('register') }}">Registrar</a></li> --}}
                                {{-- <a class="nav-link" href="{{ route('login') }}">Ingresar</a> --}}
                            @else

                                <div class="dropdown show">

                                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>Usuario
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>

                            @endguest

                        </div>

                    </li>

                </ul>

            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
        
    </div>

    <!-- Scripts -->

    <script src="{{ asset('vendor/jquery/3.2.1/slim/jquery.js') }}"></script>
    <script src="{{ asset('vendor/ajax/popper/1.12.9/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/4.0.0/js/bootstrap.js') }}"></script>

</body>
</html>

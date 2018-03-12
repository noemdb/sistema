<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Inicio</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/4.0.0/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet"> --}}
    {{-- <script defer src="{{ asset('vendor/fontawesome/5.0.8/svg-with-js/js/fontawesome-all.js') }}"></script> --}}

</head>
<body>



 <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

      <header class="masthead mb-auto">

        <div class="inner">

          <h3 class="masthead-brand">{{ config('app.name', 'Laravel') }}</h3>

          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Inicio</a>

            <a class="nav-link" href="#">Contacto</a>

            <a class="nav-link" href="#">
                @component('layouts.partials.home.navbar')
                @endcomponent
            </a>
            
          </nav>

        </div>

      </header>

      @yield('content')

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Desarrollado por <a href="https://noemdb.com/">NoeMDB</a>, TW <a href="https://twitter.com/NoeMDB">@NoeMDB</a>.</p>
        </div>
      </footer>
    </div>




    {{--
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Inicio</a>
            @else
                <a href="{{ url('/') }}">Inicio</a>
            @endauth
        </div>
    @endif 
    --}} 

    

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/3.2.1/slim/jquery.js') }}"></script>
    <script src="{{ asset('vendor/ajax/popper/1.12.9/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/4.0.0/js/bootstrap.js') }}"></script>

</body>
</html>

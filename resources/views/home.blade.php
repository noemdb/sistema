@extends('layouts.app_home')

@section('content')

      <main role="main" class="inner cover">

        <h1 class="cover-heading">

          <i class="fas fa-home"></i>
          Inicio
          
        </h1>

        @if (Auth::check())

            <small class="btn btn-sm btn-outline-success disabled"><b>Sesión iniciada correctamete!</b></small>

        @endif

        <p class="lead mt-4">

          <a href="#" class="btn btn-sm btn-info font-weight-bold">
            <i class="fas fa-info-circle"></i>
            Conoce más...
          </a>
          
        </p>

      </main>

@endsection

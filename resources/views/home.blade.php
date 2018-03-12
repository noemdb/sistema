@extends('layouts.app_home')

@section('content')

      <main role="main" class="inner cover">
        
        <h1 class="cover-heading">Inicio</h1>

        <p class="lead">Sistema desarrollado en Laravel 5.6</p>
        
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Leer mas</a>
        </p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        Sesión iniciada correctamete! {{ Auth::user()->username }}

      </main>

@endsection

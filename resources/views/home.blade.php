@extends('layouts.app_home')

@section('content')

      <main role="main" class="inner cover">

        <h1 class="cover-heading">
          <i class="fas fa-home"></i>
          Inicio
        </h1>
          
        <p class="lead mt-4">
          <a href="#" class="btn btn-sm btn-info">
            <i class="fas fa-info-circle"></i>
            Conoce más...
          </a>
        </p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

      </main>

@endsection

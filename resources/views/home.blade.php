@extends('layouts.app_home')

@section('content')


      <main role="main" class="inner cover">
        <h1 class="cover-heading">
          <i class="fas fa-home"></i>
          Inicio
        </h1>
        {{-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p> --}}
        <p class="lead">Sistema desarrollado en Laravel 5.6</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Leer mas</a>
        </p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        


        <center>
          <div class="card" style="width: 18rem;">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <div class="card-body">
              <h5 class="card-title"><b>{{ Auth::user()->username }}</b></h5>
              <h6 class="card-subtitle mb-2 text-muted">
                <b>Sesión iniciada correctamete!</b><br>
                {{ Auth::user()->is_active }}
              </h6>
              <p class="card-text text-muted">
                {{ Auth::user()->profile->full_name }}<br>
                {{ Auth::user()->email }}<br>
                {{ Auth::user()->profile->created_at }}<br>
                {{ Auth::user()->profile->updated_at }}
              </p>

                {{-- Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
              <a href="#" class="btn btn-primary">Más</a>
            </div>
          </div>
        </center>

      </main> 


@endsection

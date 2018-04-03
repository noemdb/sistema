<nav class="nav nav-masthead justify-content-center">

    <a class="nav-link active" href="#">Inicio</a>

    <a class="nav-link" href="#">Contacto</a>

    <a class="nav-link" href="#">Ayuda</a>

    <a class="nav-link" href="#">

        <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Usuario
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

            <div class="dropdown-item">
                
                {{-- {{ Auth::user()->username }} --}}

                  <div class="card bd-callout bd-callout-{{{ Auth::user()->is_active=="Activo" ? 'primary' : 'default' }}}" {{-- style="width: 18rem;" --}}>

                    <img class="card-img-top" style="width: 8rem; margin-left: auto; margin-right: auto;" src="{{ (isset($profile->url_img)) ? asset($profile->url_img) : asset('images/avatar/user_default.png') }}" alt="Card image cap">
                    <div class="card-body">
                          
                      <h6 class="badge badge-{{{ Auth::user()->is_active=="Activo" ? 'primary' : 'default' }}} mb-2 float-right">{{ Auth::user()->is_active }}</h6>
                      <h5 class="card-title text-center">
                        {{-- <i class="fas fa-user"></i> --}}
                        <b>{{ Auth::user()->username }}</b>
                      </h5>



                      {{-- <h6 class="card-subtitle mb-2 text-right"> --}}
                      {{--   <b>Sesión iniciada correctamete!</b><br>  --}}
                      {{-- </h6> --}}
                      
                      <p class="card-text text-muted">
                        {{ Auth::user()->profile->full_name }}<br>
                        {{ Auth::user()->email }}<br>
                        {{-- {{ Auth::user()->profile->created_at }}<br> --}}
                        {{-- {{ Auth::user()->profile->updated_at }} --}}
                      </p>

                      <div class="text-right">
                          <a href="#" class="btn btn-info">Más</a>
                      </div>

                    </div>

                  </div>

            </div>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">
                <i class="fas fa-cog text-primary"></i>
                Configuraciones
            </a>

            <a class="dropdown-item" href="#">
                <i class="fas fa-tachometer-alt text-success"></i>
                Dashboard
            </a>

            <a class="dropdown-item" href="#">
                <i class="fas fa-address-card text-info"></i>
                Perfil
            </a>

            <a class="dropdown-item" href="#">
                <i class="fas fa-address-book text-dark"></i>
                Rol
            </a>

            <a class="dropdown-item" href="#">
                <i class="fas fa-tasks text-warning"></i>
                Actividades
            </a>

            <a class="dropdown-item" href="#">
                <i class="fas fa-comment text-secondary"></i>
                Mensajes
            </a>

            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-danger"></i>
                Salir
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>

    </a>

</nav>
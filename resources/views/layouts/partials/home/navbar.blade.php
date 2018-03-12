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
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/inicio">Proyecto Backend</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/inicio">Inicio</a>
        </li>
        @auth
        @if (auth()->user()->id_rol === 1)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rol
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/rol/create">Nuevo rol</a></li>
            <li><a class="dropdown-item" href="/rol">Lista de roles</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Personal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/personal/create">Registrar personal</a></li>
            <li><a class="dropdown-item" href="/personal">Lista de personal</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proyecto
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/proyecto/create">Registrar proyecto</a></li>
            <li><a class="dropdown-item" href="/proyecto">Lista de proyecto</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actividades
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/actividades/create">Registrar actividades</a></li>
            <li><a class="dropdown-item" href="/actividades">Lista de actividades</a></li>
            
          </ul>
        </li>
        @endif
        @endauth
      </ul>
      
      <form class="d-flex">
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->usuario}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Cerrar sesion</a></li>
            
          </ul>
        </li>
        @endauth
      </ul>
      </form>
    </div>
  </div>
</nav>
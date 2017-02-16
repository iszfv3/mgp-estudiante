<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MGP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('home') }}">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#Mensualidades">Mensualidades<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('planes.index') }}">Planes</a></li>
          <li><a href="{{ route('cuotas.index') }}">Cuotas</a></li>
          <li><a href="{{ route('items.index') }}">Montos</a></li>
        </ul>
      </li>
      <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
      <li><a href="{{ route('estudiantes.index') }}">Estudiantes</a></li>
      <li><a href="#">Pagos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Pagina Principal</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('usuarios.info')}}">{{JWTAuth::getToken()}}</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ route('usuarios.logout') }}">Salir</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

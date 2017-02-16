@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
<div class="">
<h2 class="text-center">Creacion de usuario</h2>

<form class="form-horizontal" action="{{ route('usuarios.store') }}" method="POST">
  <div class="form-group">
      <label class="control-label col-xs-4">Cédula:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="cedula" placeholder="Nombre">
      </div>
  </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Nombres:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="nombres" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Apellidos:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="apellidos" placeholder="Apellido">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Genero:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="sexo" value="masculino"> Maculino
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="sexo" value="femenino"> Femenino
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4" >Contraseña:</label>
        <div class="col-xs-4">
            <input type="password" class="form-control" name="password" placeholder="********">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">F. Nacimiento:</label>
        <div class="col-xs-4">
            <input type="date" name="nacimiento" step="1" min="1950-01-01" max="2013-12-31">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4" >Telefono:</label>
        <div class="col-xs-4">
            <input type="tel" class="form-control" name="telefono[]" placeholder="Telefono">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Dirección:</label>
        <div class="col-xs-4">
            <textarea rows="3" class="form-control" name="direccion" placeholder="Dirección"></textarea>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="col-xs-offset-4 col-xs-4">
            <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
    </div>
</form>
</div>

@endsection

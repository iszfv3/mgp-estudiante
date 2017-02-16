@extends('admin.template.main')

@section('title', 'Editar Usuario ')

@section('content')
<div class="">
<h2 class="text-center">Modificar Usuario</h2>
<form class="form-horizontal" action="{{ route('usuarios.update', $usuario->id_Usuario) }}" method="POST">
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
      <label class="control-label col-xs-4">Cédula:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="cedula" placeholder="cedula" value="{{ $persona->cedula_Persona }}">
      </div>
  </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Nombres:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="nombres" placeholder="Nombre" value="{{ $persona->nombres_Persona }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Apellidos:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="apellidos" placeholder="Apellido" value="{{ $persona->apellidos_Persona }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Genero:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
              @if ($persona->sexo_Persona=="Masculino")
                <input type="radio" name="sexo" value="Masculino" checked="true"> Masculino
              @else
                <input type="radio" name="sexo" value="Masculino" > Masculino
              @endif
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
              @if ($persona->sexo_Persona=="Femenino")
                <input type="radio" name="sexo" value="Femenino" checked="true"> Femenino
              @else
                <input type="radio" name="sexo" value="Femenino" > Femenino
              @endif
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4" >Contraseña:</label>
        <div class="col-xs-4">
            <input type="password" class="form-control" name="password" placeholder="********" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">F. Nacimiento:</label>
        <div class="col-xs-4">
            <input type="date" name="nacimiento" step="1" min="1950-01-01" max="2013-12-31" value="{{ $persona->nacimiento_Persona }}">
        </div>
    </div>

      <div class="form-group">
          <label class="control-label col-xs-4" >Telefono:</label>
          @if (count($telefonos)==0)
            <div class="col-xs-4">
              <input type="tel" class="form-control" name="telefono[]" placeholder="Telefono">
            </div>
          @endif
          <div class="col-xs-4">
            @foreach ($telefonos as $telefono)
              <input type="tel" class="form-control" name="telefono[]" placeholder="Telefono" value="{{ $telefono->numero_Telefono }}">
            @endforeach
          </div>
      </div>


    <div class="form-group">
        <label class="control-label col-xs-4">Dirección:</label>
        <div class="col-xs-4">
            <textarea rows="3" class="form-control" name="direccion" placeholder="Dirección">{{ $persona->direccion_Persona }}</textarea>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="col-xs-offset-4 col-xs-4">
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
    </div>
</form>
</div>

@endsection

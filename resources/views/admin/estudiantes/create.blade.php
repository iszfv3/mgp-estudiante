@extends('admin.template.main')

@section('title', 'Registrar Alumno')

@section('content')
<div class="">
<h2 class="text-center">Registro de Alumno</h2>

<form class="form-horizontal" action="{{ route('estudiantes.store') }}" method="POST">
  <div class="form-group">
      <label class="control-label col-xs-4">Cédula:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="cedula" placeholder="Cedula">
      </div>
  </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Nombres:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Apellidos:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="apellido" placeholder="Apellido">
        </div>
    </div>
    <!-- <div class="form-group">
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
    </div> -->
    <div class="form-group">
        <label class="control-label col-xs-4">F. Nacimiento:</label>
        <div class="col-xs-4">
            <input type="date" name="nacimiento" step="1" min="1950-01-01" max="2013-12-31">
        </div>
    </div>
    <!-- <div class="form-group">
        <label class="control-label col-xs-4">Dirección:</label>
        <div class="col-xs-4">
            <textarea rows="3" class="form-control" name="direccion" placeholder="Dirección"></textarea>
        </div>
    </div> -->
    <!-- <div class="form-group">
        <label class="control-label col-xs-4">Plan de pago:</label>
        <div class="col-xs-4">
            <textarea rows="3" class="form-control" name="plan_pago" placeholder="Plan de Pago"></textarea>
        </div>
    </div> -->
    <!-- <div class="form-group">
        <label class="control-label col-xs-4">Año cursado:</label>
        <div class="col-xs-4">
            <textarea rows="3" class="form-control" name="curso" placeholder="Año cursado"></textarea>
        </div>
    </div> -->
    <div class="form-group">
        <label class="control-label col-xs-4">F. Inscripcion:</label>
        <div class="col-xs-4">
            <input type="date" name="inscripcion" step="1" min="1950-01-01" max="2013-12-31">
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

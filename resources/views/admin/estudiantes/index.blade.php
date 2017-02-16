@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"> <strong>Lista de Estudiantes</strong></div>
      <div class="panel-body">
        <a href="{{ route('estudiantes.create') }}" class="btn btn-info"> Añadir Estudiante</a>
      </div>
      <table class="table table-condensed table-striped">
        <thead >
          <tr >
            <th class="col-xs-2">Código</th>
            <th class="col-xs-2">Nombre</th>
            <th class="col-xs-2">Tipo</th>
            <th class="col-xs-2">Creado</th>
            <th class="col-xs-2">Acción</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection

@extends('admin.template.main')

@section('title', 'Lista de Planes')

@section('content')
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"> <strong>Lista de Planes</strong></div>
      <div class="panel-body">
        <a href="{{ route('planes.create') }}" class="btn btn-info"> Añadir Planes</a>
      </div>
      <table class="table table-condensed table-striped">
        <thead >
          <tr >
            <th class="col-xs-2">Código</th>
            <th class="col-xs-2">Nombre</th>
            <th class="col-xs-2">Descripción</th>
            <th class="col-xs-2">Creado</th>
            <th class="col-xs-2">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($planes as $plan)
            <tr>
              <td>{{ $plan->id_Plan}}</td>
              <td>{{ $plan->nombre_Plan}}</td>
              <td>{{ $plan->descripcion_Plan}}</td>
              <td>{{ $plan->created_at}}</td>
              <td>
                <a href="{{route('planes.edit', $plan->id_Plan)}}" class="btn btn-warning btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="{{route('planes.destroy', $plan->id_Plan)}}" onclick="return confirm('¿Seguro que desea Eliminar?')" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-remove"></span>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {!! $planes->render() !!}
    </div>
  </div>
@endsection

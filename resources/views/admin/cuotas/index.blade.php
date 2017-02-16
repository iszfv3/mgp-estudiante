@extends('admin.template.main')

@section('title', 'Lista de Cuotas')

@section('content')
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"> <strong>Lista de Cuotas</strong></div>
      <div class="panel-body">
        <a href="{{ route('cuotas.create') }}" class="btn btn-info"> Añadir Cuotas</a>
      </div>
      <table class="table table-condensed table-striped">
        <thead >
          <tr >
            <th class="col-xs-2">Código</th>
            <th class="col-xs-2">Plan</th>
            <th class="col-xs-2">Nombre</th>
            <th class="col-xs-2">Vencimiento</th>
            <th class="col-xs-2">Estado</th>
            <th class="col-xs-2">Creado</th>
            <th class="col-xs-2">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cuotas as $cuota)
            <tr>
              <td>{{ $cuota->id_Cuota}}</td>
              <td>{{ $cuota->id_Plan_Cuota}}</td>
              <td>{{ $cuota->nombre_Cuota}}</td>
              <td>{{ $cuota->vencimiento_Cuota}}</td>
              <td>{{ $cuota->estatus_Cuota}}</td>
              <td>{{ $cuota->created_at}}</td>
              <td>
                <a href="{{route('cuotas.edit', $cuota->id_Cuota)}}" class="btn btn-warning btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="{{route('cuotas.destroy', $cuota->id_Cuota)}}" onclick="return confirm('¿Seguro que desea Eliminar?')" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-remove"></span>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {!! $cuotas->render() !!}
    </div>
  </div>
@endsection

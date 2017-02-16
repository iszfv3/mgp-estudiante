@extends('admin.template.main')

@section('title', 'Lista de items')

@section('content')
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"> <strong>Lista de Items</strong></div>
      <div class="panel-body">
        <a href="{{ route('items.create') }}" class="btn btn-info"> Añadir Items</a>
      </div>
      <table class="table table-condensed table-striped">
        <thead >
          <tr >
            <th class="col-xs-2">Código</th>
            <th class="col-xs-2">item</th>
            <th class="col-xs-2">Nombre</th>
            <th class="col-xs-2">Monto</th>
            <th class="col-xs-2">Creado</th>
            <th class="col-xs-2">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <td>{{ $item->id_Item}}</td>
              <td>{{ $item->id_Cuota_Item}}</td>
              <td>{{ $item->nombre_Item}}</td>
              <td>{{ $item->monto_Item}}</td>
              <td>{{ $item->created_at}}</td>
              <td>
                <a href="{{route('items.edit', $item->id_Item)}}" class="btn btn-warning btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="{{route('items.destroy', $item->id_Item)}}" onclick="return confirm('¿Seguro que desea Eliminar?')" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-remove"></span>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {!! $items->render() !!}
    </div>
  </div>
@endsection

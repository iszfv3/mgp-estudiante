@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"> <strong>Lista de Usuarios</strong></div>
      <div class="panel-body">
        <a href="{{ route('usuarios.create') }}" class="btn btn-info"> Añadir Usuario</a>
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
        <tbody>
          @foreach ($usuarios as $usuario)
            <tr>
              <td>{{ $usuario->id_Usuario}}</td>
              <td>{{ $usuario->id_Persona_Usuario}}</td>
              <td>
                @if ($usuario->tipo_Usuario == "Administrador")
                  <span class="label label-primary">{{ $usuario->tipo_Usuario}}</span>
                @else
                  <span class="label label-success">{{ $usuario->tipo_Usuario}}</span>
                @endif
              </td>
              <td>{{ $usuario->created_at}}</td>
              <td>
                <a href="{{route('usuarios.edit', $usuario->id_Usuario)}}" class="btn btn-warning btn-sm">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="{{route('usuarios.destroy', $usuario->id_Usuario)}}" onclick="return confirm('¿Seguro que desea Eliminar?')" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-remove"></span>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {!! $usuarios->render() !!}
    </div>
  </div>
@endsection

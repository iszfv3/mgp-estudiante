@extends('admin.template.main')

@section('title', 'Nuevo Plan')

@section('content')

<div class="">
<h2 class="text-center">Creacion de Plan</h2>

<form class="form-horizontal" action="{{ route('planes.store') }}" method="POST">
  <div class="form-group">
      <label class="control-label col-xs-4">Nombre:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre de categoría">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-xs-4">Descripción:</label>
      <div class="col-xs-4">
          <textarea rows="3" class="form-control" name="descripcion" placeholder="Descripción"></textarea>
      </div>
  </div>
    <div class="form-group text-center">
        <div class="col-xs-offset-4 col-xs-4">
            <input type="submit" class="btn btn-primary" value="Crear">
        </div>
    </div>
</form>
</div>

@endsection

@extends('admin.template.main')

@section('title', 'Creación de items')

@section('content')

<div class="">
<h2 class="text-center">Creación de items</h2>

<form class="form-horizontal" action="{{ route('items.store') }}" method="POST">
  <div class="form-group">
      <label class="control-label col-xs-4">Codigo de la Cuota:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="cuota" placeholder="Código de la cuota">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-xs-4">Nombre:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="nombre[]" placeholder="Nombre del Item">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-xs-4">Monto:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="monto[]" placeholder="Monto del Item">
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

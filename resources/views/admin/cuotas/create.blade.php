@extends('admin.template.main')

@section('title', 'Creación de cuotas')

@section('content')

<div class="">
<h2 class="text-center">Creación de cuotas</h2>

<form class="form-horizontal" action="{{ route('cuotas.store') }}" method="POST">
  <div class="form-group">
      <label class="control-label col-xs-4">Codigo del plan:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="plan" placeholder="Código del Plan">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-xs-4">Nombre:</label>
      <div class="col-xs-4">
          <input type="text" class="form-control" name="nombre[]" placeholder="Nombre de cuota">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-xs-4">Vencimiento:</label>
      <div class="col-xs-4">
          <input type="date" name="vencimiento[]" step="1" min="1950-01-01" max="2013-12-31">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-xs-4">Estatus:</label>
      <div class="col-xs-2">
          <label class="radio-inline">
              <input type="radio" name="estatus[]" value="1"> Activo
          </label>
      </div>
      <div class="col-xs-2">
          <label class="radio-inline">
              <input type="radio" name="estatus[]" value="0"> No activo
          </label>
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

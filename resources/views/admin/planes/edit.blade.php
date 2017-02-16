@extends('admin.template.main')

@section('title', 'Editar Plan')

@section('content')
  <div class="">
  <h2 class="text-center">Modificar Plan de pago</h2>
  <form class="form-horizontal" action="{{ route('planes.update', $plan->id_Plan) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label class="control-label col-xs-4">Nombre:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre de categoría" value="{{$plan->nombre_Plan}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Descripción:</label>
        <div class="col-xs-4">
            <textarea rows="3" class="form-control" name="descripcion" placeholder="Descripción">{{$plan->descripcion_Plan}}</textarea>
        </div>
    </div>
      <div class="form-group text-center">
          <div class="col-xs-offset-4 col-xs-4">
              <input type="submit" class="btn btn-primary" value="Modificar">
          </div>
      </div>
  </form>
  </div>
@endsection

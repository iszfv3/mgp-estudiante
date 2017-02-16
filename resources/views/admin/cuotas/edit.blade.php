@extends('admin.template.main')

@section('title', 'Editar Cuota')

@section('content')
  <div class="">
  <h2 class="text-center">Modificar Cuota</h2>
  <form class="form-horizontal" action="{{ route('cuotas.update', $cuota->id_Cuota) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label class="control-label col-xs-4">Codigo del plan:</label>
        <div class="col-xs-4">
          <span class="btn btn-info">{{$cuota->id_Plan_Cuota}}</span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Nombre:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre de cuota" value="{{$cuota->nombre_Cuota}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Vencimiento:</label>
        <div class="col-xs-4">
            <input type="date" name="vencimiento" step="1" min="1950-01-01" max="2013-12-31" value="{{$cuota->vencimiento_Cuota}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Estatus:</label>

        @if ($cuota->estatus_Cuota==TRUE)
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="estatus" value="1" checked="true"> Activo
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="estatus" value="0"> No activo
            </label>
        </div>
        @else
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="estatus" value="0"> Activo
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="estatus" value="1" checked="true"> No activo
            </label>
        </div>
        @endif

    </div>
      <div class="form-group text-center">
          <div class="col-xs-offset-4 col-xs-4">
              <input type="submit" class="btn btn-primary" value="Modificar">
          </div>
      </div>

  </form>
  </div>
@endsection

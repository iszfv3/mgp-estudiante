@extends('admin.template.main')

@section('title', 'Editar Item')

@section('content')
  <div class="">
  <h2 class="text-center">Modificar Item</h2>
  <form class="form-horizontal" action="{{ route('items.update', $item->id_Item) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label class="control-label col-xs-4">Codigo de la cuota:</label>
        <div class="col-xs-4">
          <span class="btn btn-info">{{$item->id_Cuota_Item}}</span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Nombre:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre de item" value="{{$item->nombre_Item}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Costo:</label>
        <div class="col-xs-4">
            <input type="text" name="monto" placeholder="Costo del item" value="{{$item->monto_Item}}">
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

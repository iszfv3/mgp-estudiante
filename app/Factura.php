<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
  protected $table='Factura';
  protected $primaryKey = 'id_Factura';
  protected $fillable =  array('id_Usuario_Factura', 'id_Pago_Factura', 'descripcion_Factura');
  protected $hidden = ['created_at','updated_at'];

  public function pago()
  {
    return $this->belongsTo('App\Pago', 'id_Pago_Factura');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
  protected $table='Pago';
  protected $primaryKey = 'id_Pago';
  protected $fillable =  array('id_Estudiante_Pago', 'id_Cuota_Pago', 'nrecibo_Pago', 'banco_Pago', 'tipo_Pago', 'fecha_Pago', 'monto_Pago', 'estado_Pago');
  protected $hidden = ['created_at','updated_at'];

  public function cuota()
  {
    return $this->belongsTo('App\Cuota', 'id_Pago');
  }
  public function estudiante()
  {
    return $this->belongsTo('App\Estudiante', 'id_Estudiante_Pago');
  }
  public function factura()
  {
    return $this->belongsTo('App\Factura', 'id_Pago');
  }
}

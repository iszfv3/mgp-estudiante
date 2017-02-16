<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
  protected $table='Cuota';
  protected $primaryKey = 'id_Cuota';
  protected $fillable =  array('id_Plan_Cuota', 'nombre_Cuota', 'vencimiento_Cuota', 'estatus_Cuota');
  protected $hidden = ['created_at','updated_at'];

  public function plan()
  {
    return $this->belongsTo('App\Plan', 'id_Plan_Cuota');
  }
  public function pagos()
  {
    return $this->hasMany('App\Pago', 'id_Cuota_Pago');
  }
  public function items()
  {
    return $this->hasMany('App\Item', 'id_Cuota_Item');
  }
}

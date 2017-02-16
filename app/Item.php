<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table='Item';
  protected $primaryKey = 'id_Item';
  protected $fillable =  array('id_Cuota_Item', 'nombre_Item', 'monto_Item');
  protected $hidden = ['created_at','updated_at'];

  public function cuota()
  {
    return $this->belongsTo('App\Cuota', 'id_Cuota_Item');
  }
}

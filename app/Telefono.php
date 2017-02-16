<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
  protected $table='Telefono';
  protected $primaryKey = 'id_Telefono';
  protected $fillable =  array('id_Persona_Telefono', 'numero_Telefono');
  protected $hidden = ['created_at','updated_at'];

  public function persona()
  {
    return $this->belongsTo('App\Persona', 'id_Persona_Telefono');
  }
}

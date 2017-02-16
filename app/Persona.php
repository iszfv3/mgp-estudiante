<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $table='Persona';
  protected $primaryKey = 'id_Persona';
  protected $fillable =  array('cedula_Persona', 'nombres_Persona', 'apellidos_Persona', 'sexo_Persona', 'nacimiento_Persona', 'direccion_Persona');
  protected $hidden = ['created_at','updated_at'];

  public function telefonos()
  {
    return $this->hasMany('App\Telefono', 'id_Persona_Telefono');
  }
  public function usuario()
  {
    return $this->belongsTo('App\Usuario', 'id_Persona');
  }
}

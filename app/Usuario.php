<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
  use Notifiable;

  protected $table='Usuario';
  protected $primaryKey = 'id_Usuario';
  protected $fillable =  array('id_Persona_Usuario', 'tipo_Usuario');
  protected $hidden = ['clave_Usuario', 'created_at','updated_at'];

  public function getAuthPassword()
  {
    return $this->clave_Usuario;
  }

  public function persona()
  {
    return $this->hasMany('App\Persona', 'id_Persona');
  }
  public function estudiantes()
  {
    return $this->hasMany('App\Estudiante', 'id_Usuario_Estudiante');
  }
}

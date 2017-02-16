<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
  protected $table='Plan';
  protected $primaryKey = 'id_Plan';
  protected $fillable =  array('nombre_Plan', 'descripcion_Plan');
  protected $hidden = ['created_at','updated_at'];

  public function cuotas()
  {
    return $this->hasMany('App\Cuota', 'id_Plan_Cuota');
  }
  public function estudiantes()
  {
    return $this->hasMany('App\Estudiante', 'id_Plan_Estudiante');
  }
}

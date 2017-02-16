<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
  protected $table='estudiante';
  protected $primaryKey = 'id_estudiante';
  protected $fillable =  ['cedula_estudiante', 'nombre_estudiante', 'apellido_estudiante', 'nacimiento_estudiante', 'fecha_inscripcion'];
  protected $hidden = ['created_at','updated_at'];
}

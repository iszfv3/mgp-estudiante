<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
  protected $table='Empleado';
  protected $primaryKey = 'id_Empleado';
  protected $fillable =  array('id_Persona_Empleado', 'nombre_Plan_Empleado');
  protected $hidden = ['created_at','updated_at'];
}

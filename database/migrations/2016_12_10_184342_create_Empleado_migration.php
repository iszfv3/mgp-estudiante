<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoMigration extends Migration{
    public function up(){
        Schema::create('Empleado', function (Blueprint $table) {
            $table->increments('id_Empleado');
            $table->integer('id_Persona_Empleado');
            $table->string('nombre_Plan_Empleado');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('Empleado');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {

            $table->increments('id_estudiante');
            //$table->string('id_Persona_Estudiante')->unsigned();
            $table->integer('cedula_estudiante');
            $table->string('nombre_estudiante');
            $table->string('apellido_estudiante');
            $table->date('nacimiento_estudiante');
            $table->date('inscripcion_estudiante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}

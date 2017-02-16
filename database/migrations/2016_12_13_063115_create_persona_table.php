<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Persona');
            $table->integer('cedula_Persona');
            $table->string('nombres_Persona');
            $table->string('apellidos_Persona');
            $table->enum('sexo_Persona', ['Masculino', 'Femenino']);
            $table->date('nacimiento_Persona');
            $table->string('direccion_Persona');

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
        Schema::dropIfExists('Persona');
    }
}

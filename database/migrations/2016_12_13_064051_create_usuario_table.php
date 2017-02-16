<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Usuario');
            $table->integer('id_Persona_Usuario')->unsigned();
            $table->enum('tipo_Usuario', ['Representante', 'Administrador'])->default('Representante');
            $table->string('clave_Usuario');

            $table->foreign('id_Persona_Usuario')->references('id_Persona')->on('Persona')->onDelete('cascade');

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
        Schema::dropIfExists('Usuario');
    }
}

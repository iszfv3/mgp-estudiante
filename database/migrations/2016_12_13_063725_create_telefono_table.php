<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Telefono', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Telefono');
            $table->integer('id_Persona_Telefono')->unsigned();
            $table->string('numero_Telefono')->unique();

            $table->foreign('id_Persona_Telefono')->references('id_Persona')->on('Persona')->onDelete('cascade');

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
        Schema::dropIfExists('Telefono');
    }
}

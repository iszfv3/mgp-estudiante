<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pago', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Pago');
            $table->integer('id_Estudiante_Pago')->unsigned();
            $table->integer('id_Cuota_Pago')->unsigned();
            $table->integer('nrecibo_Pago');
            $table->string('banco_Pago');
            $table->string('tipo_Pago');
            $table->date('fecha_Pago');
            $table->decimal('monto_Pago', 10, 2);
            $table->boolean('estado_Pago')->default(0);

            $table->foreign('id_Estudiante_Pago')->references('id_Estudiante')->on('Estudiante');
            $table->foreign('id_Cuota_Pago')->references('id_Cuota')->on('Cuota');

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
        Schema::dropIfExists('Pago');
    }
}

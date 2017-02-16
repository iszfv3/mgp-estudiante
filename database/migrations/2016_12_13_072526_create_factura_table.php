<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factura', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Factura');
            $table->integer('id_Pago_Factura')->unsigned();
            $table->integer('id_Usuario_Factura')->unsigned();
            $table->string('descripcion_Factura');

            $table->foreign('id_Pago_Factura')->references('id_Pago')->on('Pago')->onDelete('cascade');
            $table->foreign('id_Usuario_Factura')->references('id_Usuario')->on('Usuario');

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
        Schema::dropIfExists('Factura');
    }
}

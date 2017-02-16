<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cuota', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Cuota');
            $table->integer('id_Plan_Cuota')->unsigned();
            $table->string('nombre_Cuota');
            $table->date('vencimiento_Cuota');
            $table->boolean('estatus_Cuota')->default(0);

            $table->foreign('id_Plan_Cuota')->references('id_Plan')->on('Plan')->onDelete('cascade');

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
        Schema::dropIfExists('Cuota');
    }
}

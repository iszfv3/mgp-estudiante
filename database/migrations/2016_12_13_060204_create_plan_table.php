<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Plan', function (Blueprint $table) {
          $table->engine = 'InnoDB';

          $table->increments('id_Plan');
          $table->string('nombre_Plan')->unique();
          $table->string('descripcion_Plan');

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
        Schema::dropIfExists('Plan');
    }
}

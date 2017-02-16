<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_Item');
            $table->integer('id_Cuota_Item')->unsigned();
            $table->string('nombre_Item');
            $table->decimal('monto_Item', 10, 2);

            $table->foreign('id_Cuota_Item')->references('id_Cuota')->on('Cuota')->onDelete('cascade');

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
        Schema::dropIfExists('Item');
    }
}

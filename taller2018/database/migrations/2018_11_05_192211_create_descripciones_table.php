<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('descripciones', function (Blueprint $table) {
            //$table->increments('id');
            //$table->text('descripcion');
            //$table->string('foto_personal',50);
            //$table->string('tipo_casa',25);
            //$table->string('ci',25);
            //$table->string('foto_ci',50);
            //$table->boolean('jardin');
            //$table->boolean('terraza');
            //$table->boolean('balcon');
            //$table->timestamps();
            //$table->softDeletes();
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('descripciones');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntuacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntuaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('servicio_id');
            $table->decimal('puntuacion',10,5);
            $table->integer('tx_usuario_id');
            $table->string('tx_host',25);
            $table->integer('tx_id');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntuaciones');
    }
}

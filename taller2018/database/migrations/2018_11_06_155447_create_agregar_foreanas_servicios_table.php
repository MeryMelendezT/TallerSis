<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgregarForeanasServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicios', function ($table) {
            //$table->foreign('reembolso_id')->references('id')->on('reembolsos');
            //$table->foreign('factura_id')->references('id')->on('facturas');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id_1')->references('id')->on('users');
            $table->foreign('canino_id')->references('id')->on('caninos');
            //$table->foreign('billetera_id')->references('id')->on('billeteras');
            //$table->foreign('billetera_id_1')->references('id')->on('billeteras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agregar_foreanas_servicios');
    }
}

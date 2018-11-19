<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursal_id');
            $table->bigInteger('numero_factura');
            $table->bigInteger('autorizacion');
            $table->string('apellido_factura',50);
            $table->string('nit_factura',25);
            $table->integer('cahtidad');
            $table->text('descripcion_factura');
            $table->decimal('unidad',10,5);
            $table->decimal('importe',10,5);
            $table->string('nombre_personal',25);
            $table->string('codigo_control',25);
            $table->bigInteger('dosificacion');
            $table->date('limite_emision');
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
        Schema::dropIfExists('facturas');
    }
}

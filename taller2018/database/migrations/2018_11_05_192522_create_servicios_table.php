<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reembolso_id');
            $table->integer('factura_id');
            $table->integer('usuario_id');
            $table->integer('usuario_id_1');
            $table->integer('billetera_id');
            $table->integer('billetera_id_1');
            $table->string('tipo_servicio',25);
            $table->decimal('precio',10,5);
            $table->decimal('precio_adicional',10,5);
            $table->string('direccion',100);
            $table->string('punto_encuentro');
            $table->integer('numero_zonas');
            $table->date('fecha');
            $table->integer('duracion');
            $table->string('estado');
            $table->decimal('precio_factura',10,5);
            $table->decimal('precio_empresa',10,5);
            $table->decimal('precio_total',10,5);
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
        Schema::dropIfExists('servicios');
    }
}

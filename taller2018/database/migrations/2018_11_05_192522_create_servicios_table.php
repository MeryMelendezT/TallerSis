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
            //$table->integer('reembolso_id');
            //$table->integer('factura_id');
            $table->integer('user_id');
            $table->integer('user_id_1');
            $table->integer('canino_id');
            //$table->integer('billetera_id');
            //$table->integer('billetera_id_1');
            $table->string('tipo_servicio',25);
            $table->decimal('precio',10,5);
            //$table->decimal('precio_adicional',10,5);
            //$table->string('direccion',100);
            $table->float('punto_encuentro_longitud')->nullable();
            $table->float('punto_encuentro_latitud')->nullable();
            //$table->integer('numero_zonas');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->integer('duracion')->nullable();
            $table->string('estado');
            //$table->decimal('precio_factura',10,5);
            $table->decimal('precio_empresa',10,5)->nullable();
            $table->decimal('precio_total',10,5)->nullable();
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

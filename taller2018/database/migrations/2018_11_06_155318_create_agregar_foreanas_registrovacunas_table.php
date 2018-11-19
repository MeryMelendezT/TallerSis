<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgregarForeanasRegistrovacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrovacunas', function ($table) {
            $table->foreign('canino_id')->references('id')->on('caninos');
            $table->foreign('vacuna_id')->references('id')->on('vacunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agregar_foreanas_registrovacunas');
    }
}

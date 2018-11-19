<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaninosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caninos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nombre',25);
            $table->string('image')->nullable();
            $table->string('raza',25);
            $table->date('nacimiento');
            $table->string('genero',25);
            $table->string('agresivo',25);
            $table->decimal('peso',10,5);
            $table->text('tipo_comida');
            $table->text('extras');
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
        Schema::dropIfExists('caninos');
    }
}

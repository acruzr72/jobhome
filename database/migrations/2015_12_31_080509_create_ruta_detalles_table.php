<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_detalles', function (Blueprint $table) {
            $table->integer('ruta_id')->unsigned();
            $table->integer('etapaTipo_id')->unsigned();
            $table->foreign('ruta_id')->references('id')->on('rutas');
            $table->foreign('etapaTipo_id')->references('id')->on('etapa_tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ruta_detalles');
    }
}

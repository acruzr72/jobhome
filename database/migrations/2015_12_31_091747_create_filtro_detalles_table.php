<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiltroDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtro_detalles', function (Blueprint $table) {
            $table->integer('filtro_id')->unsigned();
            $table->integer('campo_id')->unsigned();
            $table->foreign('filtro_id')->references('id')->on('filtros');
            $table->foreign('campo_id')->references('id')->on('campos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filtro_detalles');
    }
}

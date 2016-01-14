<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantePostFiltrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacante_post_filtros', function (Blueprint $table) {
            $table->integer('vacantePost_id')->unsigned();
            $table->integer('filtro_id')->unsigned();
            $table->foreign('vacantePost_id')->references('id')->on('vacante_posts'); 
            $table->foreign('filtro_id')->references('id')->on('filtros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacante_post_filtros');
    }
}

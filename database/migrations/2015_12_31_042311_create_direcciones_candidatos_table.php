<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones_candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('calle',200);
            $table->string('numExterior',20);
            $table->string('numInterior',20);
            $table->integer('cpColonias_id')->unsigned();
            $table->integer('municipios_id')->unsigned();
            $table->integer('estados_id')->unsigned();
            $table->integer('pais_id')->unsigned();
            $table->char('suc_id');
            $table->foreign('users_id')->references('user_id')->on('candidatos');
            $table->foreign('cpColonias_id')->references('id')->on('cp_colonias');
            $table->foreign(['municipios_id','estados_id'])->references(['id','estados_id'])->on('municipios');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('suc_id')->references('id')->on('sucursals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direcciones_candidatos');
    }
}

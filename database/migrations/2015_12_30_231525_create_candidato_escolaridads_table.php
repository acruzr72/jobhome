<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoEscolaridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_escolaridads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('escolaridad_id')->unsigned();
            $table->string('nombre',100);
            $table->string('periodo',50);
            $table->boolean('terminado');
            $table->string('documento',45);
            $table->foreign('user_id')->references('user_id')->on('candidatos');
            $table->foreign('escolaridad_id')->references('id')->on('escolaridads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidato_escolaridads');
    }
}

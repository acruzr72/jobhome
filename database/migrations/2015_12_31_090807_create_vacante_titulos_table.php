<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanteTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacante_titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vacantePost_id')->unsigned();
            $table->string('titulo_alternativo',150);
            $table->foreign('vacantePost_id')->references('id')->on('vacante_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacante_titulos');
    }
}

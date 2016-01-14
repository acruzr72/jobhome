<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanteTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacante_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('puestos_id')->unsigned();
            $table->string('escolaridad',150);
            $table->text('responsabilidades');
            $table->text('experiencia');
            $table->text('conocimientos');
            $table->text('habilidades');
            $table->text('competencias');
            $table->string('horario',150);
            $table->boolean('viajar');
            $table->string('lugar_trabajo',150);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('puestos_id')->references('id')->on('puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacante_tipos');
    }
}

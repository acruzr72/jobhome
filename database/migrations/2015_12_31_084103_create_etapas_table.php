<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapas', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('vacantePost_id')->unsigned();
            $table->integer('personal_id')->unsigned();
            $table->integer('etapaTipo_id')->unsigned();
            $table->date('fecha_inicial');
            $table->date('fecha_solicitada');
            $table->date('fecha_final');
            $table->primary(['user_id', 'vacantePost_id']);
            $table->foreign('user_id')->references('user_id')->on('aplica_vacantes');
            $table->foreign('vacantePost_id')->references('vacantePost_id')->on('aplica_vacantes');
            $table->foreign('personal_id')->references('users_id')->on('personal_rhs');
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
        Schema::drop('etapas');
    }
}

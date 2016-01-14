<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicaVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplica_vacantes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('vacantePost_id')->unsigned();
            $table->integer('estatus_id')->unsigned();
            $table->date('fecha_aplica');
            $table->date('fecha_final');
            $table->decimal('sueldo_negociado',5,2);
            $table->primary(['user_id', 'vacantePost_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vacantePost_id')->references('id')->on('vacante_posts');
            $table->foreign('estatus_id')->references('id')->on('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aplica_vacantes');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->char('suc_id');
            $table->enum('genero',['masculino','femenino']);
            $table->boolean('tieneCartilla');
            $table->string('cartilla',50);
            $table->string('rfc',50);
            $table->string('curp',50);
            $table->date('fecha_nacimiento');
            $table->integer('nacionalidad_id')->unsigned();
            $table->tinyInteger('estatura_m')->unsigned();
            $table->tinyInteger('peso_kg')->unsigned();
            $table->boolean('tieneLicencia');
            $table->string('tipoLicencia',3);
            $table->boolean('laboroEmpresaSeg');
            $table->boolean('laboroSegPub');
            $table->boolean('conocidoSerpa');
            $table->boolean('familiaPgrReclu');
            $table->boolean('cargoSindicato');
            $table->boolean('tieneTatuajes');
            $table->tinyInteger('recomendacion_id')->unsigned();
            $table->string('fuenteOtro',60);
            $table->string('personaSSP',60);
            $table->boolean('disponHoario');
            $table->boolean('estudia');
            $table->string('estudiaHorario',40);
            $table->text('observacionesCandidato');
            $table->primary('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('suc_id')->references('id')->on('sucursals');
            $table->foreign('nacionalidad_id')->references('id')->on('pais');
            $table->foreign('recomendacion_id')->references('id')->on('recomendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidatos');
    }
}

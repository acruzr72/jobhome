<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('estados_id')->unsigned();
            $table->string('municipio_delegacion',60);
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->primary(['id','estados_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('municipios');
    }
}

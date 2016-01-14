<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacante_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('vacanteTipo_id')->unsigned();
            $table->char('suc_id');
            $table->integer('ruta_id')->unsigned();
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('post_activo')->default(1);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vacanteTipo_id')->references('id')->on('vacante_tipos');
            $table->foreign('suc_id')->references('id')->on('sucursals');
            $table->foreign('ruta_id')->references('id')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacante_posts');
    }
}

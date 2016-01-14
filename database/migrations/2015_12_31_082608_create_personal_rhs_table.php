<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalRhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_rhs', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->integer('puestos_id')->unsigned();
            $table->string('foto',50);
            $table->string('aliasname',20);
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::drop('personal_rhs');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->string('paterno',35);
            $table->string('materno',35);
            $table->string('nombres',75);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('active')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

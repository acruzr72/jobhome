<?php

use Illuminate\Database\Seeder;
use App\Entities;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'rol_id'		=> 1,
			'paterno'		=> 'Deckard',
			'materno'		=>	'Philiph',
			'nombres'		=> 'Rick',
			'email'			=> 'jhnrare@gmail.com',
			'password'	=>	\Hash::make('sagan395') 

        	]);

        DB::table('users')->insert([
			'rol_id'		=> 2,
			'paterno'		=> 'Rangel',
			'materno'		=>	'Yussim',
			'nombres'		=> 'Miguel Angel',
			'email'			=> 'miguel@photocorp.mx',
			'password'	=>	\Hash::make('sagan395') 
        	]);

        factory(jobposting\Entities\User::class,300)->create();
    }
}

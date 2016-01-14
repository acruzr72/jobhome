<?php

use Illuminate\Database\Seeder;
use App\Entities;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
			'id'			=> 1,
			'nombre'		=> 'superuser',
			'permisos'		=>	'todos' 
        	]);
        DB::table('rols')->insert([
			'id'			=> 2,
			'nombre'		=> 'admin',
			'permisos'		=>	'Administrador' 
        	]);
        DB::table('rols')->insert([
			'id'			=> 3,
			'nombre'		=> 'reclutador',
			'permisos'		=>	'Reclutador por sucursal' 
        	]);
         DB::table('rols')->insert([
			'id'			=> 4,
			'nombre'		=> 'reclutador sucursal',
			'permisos'		=>	'Solo reclutador de sucursal' 
        	]);
         DB::table('rols')->insert([
			'id'			=> 5,
			'nombre'		=> 'Candidato registrado',
			'permisos'		=>	'Usuario registrado en el portal' 
        	]);
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [

		'as' 	=> 'home',
		'uses'	=> 'jobPosController@home'
	]);

Route::get('/contacto', [

		'as' 	=> 'contacto',
		'uses'	=> 'JobPosController@contacto'
	]);


Route::get('/acerca', [

		'as' 	=> 'acerca',
		'uses'	=> 'JobPosController@acerca'
	]);



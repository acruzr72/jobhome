<?php

use Illuminate\Database\Eloquent\Model;
use jobposting\Entities;
use Illuminate\Database\Seeder;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(jobposting\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'rol_id'  => 5,
        'paterno' => $faker->lastName,
        'materno' => $faker->lastName,
        'nombres' => $faker->name,
        'email'   =>$faker->unique()->email,
        'password'  =>\Hash::make('123456')
    ];
});

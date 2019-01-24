<?php

use App\Models\Animal;
use App\Models\Specie;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB as DB;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Animal::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'rg' => $faker->unique()->randomNumber($nbDigits = 6, $strict = true),
        'specie' => DB::table('species')->exists() ? DB::table('species')->inRandomOrder()->first()->id : factory(Specie::class)->create(),
    ];
});

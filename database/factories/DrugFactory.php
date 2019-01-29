<?php

use App\Models\Drug;
use App\Models\Specie;
use App\Models\Medicine;
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

$factory->define(Drug::class, function (Faker $faker) {
    return [
        'specieId' => DB::table('species')->exists() ? DB::table('species')->inRandomOrder()->first()->id : factory(Specie::class)->create(),
        'medicineId' => DB::table('medicines')->exists() ? DB::table('medicines')->inRandomOrder()->first()->id : factory(Medicine::class)->create(),
        'maximumDose' => $faker->randomFloat(),
        'minimumDose' => $faker->randomFloat(),
        'averageDose' => $faker->randomFloat()
    ];
});

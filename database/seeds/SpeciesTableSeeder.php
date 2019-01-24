<?php

use Illuminate\Database\Seeder;
use App\Models\Specie;

class SpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specie::create([
            'name' => 'bovino'
        ]);

        Specie::create([
            'name' => 'caprino'
        ]);

        Specie::create([
            'name' => 'cão'
        ]);

        Specie::create([
            'name' => 'equino'
        ]);

        Specie::create([
            'name' => 'gato'
        ]);

        Specie::create([
            'name' => 'ovino'
        ]);
    }
}

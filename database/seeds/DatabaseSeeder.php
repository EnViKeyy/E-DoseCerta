<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MedicinesTableSeeder::class);
        $this->call(SpeciesTableSeeder::class);
        $this->call(DrugTableSeeder::class);
        $this->call(AnimalsTableSeeder::class);
    }
}

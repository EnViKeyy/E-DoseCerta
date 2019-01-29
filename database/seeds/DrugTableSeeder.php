<?php

use Illuminate\Database\Seeder;
use App\Models\Drug;

class DrugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Drug::class, 10)->create();
    }
}

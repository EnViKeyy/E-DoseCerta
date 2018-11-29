<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dose Master',
            'email' => 'master@edosecerta.com',
            'password' => 'secret',
            'crmv' => '0000',
            'remember_token' => 'KjF6hUIZ2d'
        ]);
        factory(User::class, 9)->create();
    }
}

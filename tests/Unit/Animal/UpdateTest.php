<?php

namespace Tests\Unit;

use App\Models\Animal;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
    }


    /**
     * @test Update a specific animal
     *
     * @return void
     */
    public function testUpdate()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $animal = factory(Animal::class)->create([
            'name' => 'test',
            'rg' => '000',
            'specie' => '0'
        ]);

        $this->assertDatabaseHas('animals', [
            'name' => 'test',
            'rg' => '000',
            'specie' => '0'
        ]);

        $this->put(route('animals.update', $animal->id), [
            'name' => 'test1',
            'rg' => '111',
            'specie' => '1'
        ]);

        $this->assertDatabaseHas('animals', [
            'name' => 'test1',
            'rg' => '111',
            'specie' => '1'
        ]);
    }
}

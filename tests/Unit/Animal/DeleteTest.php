<?php

namespace Tests\Unit;

use App\Models\Animal;
use App\Models\Specie;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
    }


    /**
     * @test Delete a specific animal
     *
     * @return void
     */
    public function testDelete()
    {
        $user = factory(User::class)->create();

        $specie = factory(Specie::class)->create();

        $this->be($user);

        $animal = factory(Animal::class)->create([
            'name' => 'test',
            'rg' => '000',
            'specie' => $specie->id
        ]);

        $this->assertDatabaseHas('animals', [
            'name' => 'test',
            'rg' => '000',
            'specie' => $specie->id
        ]);

        $response = $this->delete(route('animals.destroy', $animal->id));

        $response->assertSuccessful();
    }
}

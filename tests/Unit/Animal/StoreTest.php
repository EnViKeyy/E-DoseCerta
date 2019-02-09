<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Specie;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
    }


    /**
     * @test Store a specific animal
     *
     * @return void
     */
    public function testStore()
    {
        $user = factory(User::class)->create();

        $specie = factory(Specie::class)->create();

        $this->be($user);

        $animal = [
            'name' => 'test',
            'rg' => '000',
            'specie' => $specie->id
        ];

        $this->post(route('animals.store', $animal));

        $this->assertDatabaseHas('animals', [
            'name' => 'test',
            'rg' => '000',
            'specie' => $specie->id
        ]);
    }
}

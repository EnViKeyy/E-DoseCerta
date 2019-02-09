<?php

namespace Tests\Unit;

use App\Models\Animal;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
    }


    /**
     * @test Get a specific animal
     *
     * @return void
     */
    public function testUpdate()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $animal = factory(Animal::class)->create();

        $response = $this->get(route('animals.show', $animal->id));

        $response->assertSuccessful();
    }
}

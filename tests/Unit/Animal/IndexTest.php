<?php

namespace Tests\Unit;

use App\Models\Animal;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
    }


    /**
     * @test Get all assisteds paginated
     *
     * @return void
     */
    public function testStore()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        factory(Animal::class, 5)->create();

        $response = $this->get(route('animals.index'));

        $response->assertSuccessful();
    }
}

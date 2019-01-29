<?php

namespace Tests\Unit;

use App\Models\User;
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
     * A basic test example.
     *
     * @return void
     */
    public function testStore()
    {
        $user = factory(User::class)->create();

        $this->be($user);

        $animal = [
            'name' => 'test',
            'rg' => '000',
            'specie' => '0'
        ];

        $this->post(route('animals.store', $animal));

        $this->assertDatabaseHas('animals', [
            'name' => 'test',
            'rg' => '000',
            'specie' => '0'
        ]);
    }
}

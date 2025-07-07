<?php

namespace Tests\Feature\Hotels;

use App\Models\Hotel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HotelTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function test_hotels_index()
    {
        $response = $this->get('/hotel');
        $response->assertStatus(200);
    }

    public function test_hotels_can_be_shown()
    {
        $hotel = Hotel::factory()->create();
        $response = $this->get('/hotel/' . $hotel->getKey());
        $response->assertStatus(200);
    }

    public function test_hotels_can_be_created()
    {
        $attributes = [
            'name' => 'Test name',
            'address' => 'Test address',
        ];

        $response = $this->post('/hotel', $attributes);
        $response->assertStatus(202);
        $this->assertDatabaseHas('hotels', $attributes);
    }

    public function test_hotel_can_be_updated()
    {
        $hotel = Hotel::factory()->create();
        $attributes = [
            'name' => 'New name',
            'address' => 'New address',
        ];
        $response = $this->patch('/hotel/' . $hotel->getKey(), $attributes);
        $response->assertStatus(202);
        $this->assertDatabaseHas('hotels', $attributes);
    }

    public function test_hotel_can_be_deleted()
    {
        $hotel = Hotel::factory()->create();
        $response = $this->delete('/hotel/' . $hotel->getKey());
        $response->assertStatus(204);

        $this->assertDatabaseMissing('hotels', ['id' => $hotel->getKey()]);
    }
}

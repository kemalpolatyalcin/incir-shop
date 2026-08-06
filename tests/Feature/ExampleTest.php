<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_pages_return_successful_response(): void
    {
        $this->seed();

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/urunlerimiz');
        $response->assertStatus(200);

        $response = $this->get('/hakkimizda');
        $response->assertStatus(200);

        $response = $this->get('/iletisim');
        $response->assertStatus(200);

        $this->withoutMiddleware();
        $response = $this->post('/iletisim', [
            'first_name' => 'Kemal',
            'last_name' => 'Yamac',
            'phone_number' => '05327172110',
            'message' => 'Test mesajidir.',
        ]);
        $response->assertRedirect();
        $this->assertDatabaseHas('messages', [
            'name' => 'Kemal Yamac',
            'phone' => '05327172110',
            'message' => 'Test mesajidir.',
        ]);
    }
}

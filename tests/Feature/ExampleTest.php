<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_pages_return_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hakkimizda');
        $response->assertStatus(200);

        $response = $this->get('/iletisim');
        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // Tester une route qui existe réellement dans ton projet
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
}

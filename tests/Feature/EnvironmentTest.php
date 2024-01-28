<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $youtube = env('YOUTUBE');

        $this->assertEquals('Programmer Zaman Now', $youtube); // Menggunakan $this->assertEquals() dari PHPUnit

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

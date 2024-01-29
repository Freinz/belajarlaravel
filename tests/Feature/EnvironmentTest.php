<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $youtube = env('YOUTUBE');

        assertEquals('Programmer Zaman Now', $youtube); 

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testDefaultEnv()
    {
        $author = Env::get('AUTHOR', 'Eko');

        self::assertEquals('Eko', $author);
    }


}

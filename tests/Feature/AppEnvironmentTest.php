<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        if(App::environment('testing')) {
            // kode program kita
            self::assertTrue(true);
        }
    }
}

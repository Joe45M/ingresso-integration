<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Whether or not the homepage renders
     *
     * @return void
     */
    public function test_homepage_renders()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

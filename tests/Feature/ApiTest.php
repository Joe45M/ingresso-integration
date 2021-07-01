<?php

namespace Tests\Feature;

use App\Actions\GetEvents;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * The API returns a valid response
     *
     * @return void
     */
    public function test_api_returns_valid_response()
    {
        $events = GetEvents::execute();

        $this->assertNotFalse($events);
    }
}

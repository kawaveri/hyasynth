<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class getwildTest extends TestCase
{
    /**
     * wild&toughがget出来るかテストします。
     *
     * @return void
     */
    public function testGetWildAndTough()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class getwildControllerTest extends TestCase
{
    /**
     * wildとtoughが取得出来るかテストします。
     *
     * @return void
     */
    public function testGetWild()
    {
        $response = $this->get('/getwilds');

        $response->assertStatus(200);
    }
}

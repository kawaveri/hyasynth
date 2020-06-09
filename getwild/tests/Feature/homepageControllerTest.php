<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class homepageControllerTest extends TestCase
{
    /**
     * 昔の個人ホームページにありがちだったことをテストします。
     *
     * @return void
     */
    public function testHomepage()
    {
        $response = $this->get('/homepages');

        $response->assertStatus(200);
    }
}

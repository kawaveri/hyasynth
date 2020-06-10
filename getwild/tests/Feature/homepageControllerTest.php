<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class homepageControllerTest extends TestCase
{
    /**
     * 昔の個人ホームページにありがちだったことをテストします。
     * @link https://getnews.jp/archives/59627
     *
     * @return void
     */
    public function testHomepage()
    {
        //
        $response = $this->get('/homepages')
            ->assertStatus(200)
            ->assertSee('ホームページ');
    }
}

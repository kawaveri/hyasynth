<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class getwildTest extends TestCase
{
    /**
     * get wild&toughが正しいかテストします。
     *
     * @return void
     */
    public function testGetWildAndTough()
    {
        // Getwildインスタンスを生成
        $getwild = new Getwild();

        // wild&toughがget出来るかテスト
        $this->assertTrue($getwild->get('wild', 'tough'));
    }
}

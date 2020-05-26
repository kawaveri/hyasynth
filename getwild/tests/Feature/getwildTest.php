<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Getwild;

class getwildTest extends TestCase
{
    /**
     * wildとtoughがget出来るかテストします。
     *
     * @return void
     */
    public function testGetWildAndTough()
    {
        // Getwildインスタンスを生成
        $getter = new Getwild();
        // 期待値
        $expected = ['wild', 'tough'];
        // 実行結果
        $actual = $getter->getWildAndTough();

        // 型も含めて等しいかテスト
        $this->assertSame($expected, $actual);
    }
}

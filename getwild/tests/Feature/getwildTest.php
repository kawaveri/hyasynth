<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Getwild;

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

        // wild&toughがget出来る
        $this->assertTrue($getwild->get('wild', 'tough'));
        // wild|toughではget出来ない
        $this->assertFalse($getwild->get('wild', null));
        $this->assertFalse($getwild->get(null, 'tough'));
        // chance&luckもget出来る
        $this->assertTrue($getwild->get('chance', 'luck'));
        // wild&toughまたはchance&luckの組み合わせでないとget出来ない
        $this->assertFalse($getwild->get('wild', 'luck'));
        $this->assertFalse($getwild->get('chance', 'tough'));
        // simon&garfunkelはget出来ない
        $this->assertFalse($getwild->get('simon', 'garfunkel'));
    }
    /**
     * ひとりでは解けない愛のパズルを抱いているかテストします。
     *
     * @return void
     */
    public function testLovePuzzle()
    {
        // Getwildインスタンスを生成
        $getwild = new Getwild();

        // 抱いているパズルを取得
        $puzzle = $getwild->puzzle;

        // ひとりでは解けない
        $this->assertGreaterThan(1, $puzzle['solve_required']);
        // 解く人がいないと解けない
        $this->assertGreaterThan(0, $puzzle['solve_required']);
        // 二人以上なら解ける
        $this->assertLessThanOrEqual(2, $puzzle['solve_required']);

        // 愛のパズルであるか
        $this->assertEquals('love', $puzzle['type']);
        // ジグソーのパズルではない
        $this->assertNotEquals('zigsaw', $puzzle['type']);
        // パズル＆ドラゴンズではない
        $this->assertNotEquals('dragons', $puzzle['type']);

        // 愛のパズルを抱いている
        $this->assertTrue($puzzle['is_hold']);
    }
}

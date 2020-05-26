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
    }
}

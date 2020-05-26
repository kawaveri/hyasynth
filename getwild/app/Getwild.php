<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Getwild extends Model
{

    /**
     * getした組み合わせがwild&toughか判定します。
     *
     * @param string $foo 文字列１
     * @param string $bar 文字列２
     * @return bool 判定結果
     */
    public function get(?string $foo, ?string $bar): bool
    {
        $wilds = collect([
            ['foo' => 'wild', 'bar' => 'tough'],
            ['foo' => 'chance', 'bar' => 'luck'],
        ]);
        // 条件に合致した組み合わせが存在するかチェックして返す
        return $wilds
            ->where('foo', $foo)
            ->where('bar', $bar)
            ->isNotEmpty();
    }

    /**
     * ひとりでは解けない愛のパズルを返します。
     *
     * @return Collection ひとりでは解けない愛のパズル
     */
    public function getPuzzleAttribute(): Collection
    {
        return collect([
            'solve_required' => 2, // 愛のパズルを解くのに必要な人数
            'type' => 'love', // パズルの種類
            'is_hold' => true, // 抱いているか
        ]);
    }
}

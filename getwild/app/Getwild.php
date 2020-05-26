<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}

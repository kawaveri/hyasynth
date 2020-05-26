<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getwild extends Model
{

    /**
     * getした組み合わせがwild&toughか判定します。
     *
     * @param string $word1 文字列１
     * @param string $word2 文字列２
     * @return bool 判定結果
     */
    public function get(?string $word1, ?string $word2): bool
    {
        return $word1 === 'wild' && $word2 === 'tough';
    }
}

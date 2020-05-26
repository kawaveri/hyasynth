<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getwild extends Model
{

    /**
     * wild&toughを返します。
     *
     * @return array wild&tough
     */
    public function getWildAndTough()
    {
        return ['wild', 'tough'];
    }

    /**
     * chance&luckを返します。
     *
     * @return array chance&luck
     */
    public function getChanceAndLuck()
    {
        return ['chance', 'luck'];
    }
}

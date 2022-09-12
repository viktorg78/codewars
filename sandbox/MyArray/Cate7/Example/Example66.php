<?php

namespace MyArray\Cate7\Example;

class Example66
{
    public static function countWins($winnerList, $country)
    {
        $arr = array_filter(array_column($winnerList, 'country'), function ($val) use ($country) {
            return $val === $country;
        });
        return count($arr);
    }
}
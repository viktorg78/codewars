<?php

namespace MyArray\Cate6\Example;

class Example13
{
    public static function high($x)
    {
        $standard = array_flip(range('a', 'z'));
        $arr = explode(' ', $x);
        $arrSum = [];

        foreach ($arr as $value) {
            $arrS = str_split($value);
            $a = array_map(function ($val) use ($standard) {
                return $standard[$val] + 1;
            }, $arrS);
            $sum = array_sum($a);
            $arrSum[] = $sum;
        }

        $max = array_search(max($arrSum), $arrSum);
        return $arr[$max];
    }
}
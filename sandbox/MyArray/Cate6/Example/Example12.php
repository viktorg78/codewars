<?php

namespace MyArray\Cate6\Example;

class Example12
{
    public static function numberOfPairs($gloves)
    {
        $arr = array_count_values($gloves);
        $arr = array_map(fn($val) => ($val % 2 != 0) ? $val - 1 : $val, $arr);
        $arr = array_map(fn($val) => $val / 2, $arr);
        return array_sum($arr);
    }
}
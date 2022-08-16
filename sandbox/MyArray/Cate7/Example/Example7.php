<?php

namespace MyArray\Cate7\Example;

class Example7
{
    public static function maxTriSum(array $arr): int
    {
        $arr = array_unique($arr);
        rsort($arr);
        $arr = array_values($arr);
        $arr = array_slice($arr, 0, 3);
        return array_sum($arr);
    }
}
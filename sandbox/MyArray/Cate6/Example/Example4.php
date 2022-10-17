<?php

namespace MyArray\Cate6\Example;

class Example4
{
    public static function reverse($str)
    {
        $arr = array_filter(explode(' ', $str), function ($n) {
            return !empty($n);
        });
        $arr = array_values($arr);
        $arr = array_map(function ($n, $arr) {
            return !isOddNumber($n) ? strrev($arr) : $arr;
        }, array_keys($arr), $arr);
        return implode(' ', $arr);
    }
}
<?php

namespace MyArray\Cate7\Example;

class Example19
{
    public static function isNice($arr)
    {

        if (count($arr) == 0) return false;
        $numArr = array_map(function ($value) use ($arr) {
            return in_array($value - 1, $arr) || in_array($value + 1, $arr);
        }, $arr);

        return !in_array(false, $numArr);
    }
}

<?php

namespace MyArray\Cate7\Example;

class Example68
{
    public static function counterEffect($hit_count)
    {
        return array_map(function ($val) {
            return range(0, $val);
        }, str_split($hit_count));
    }
}
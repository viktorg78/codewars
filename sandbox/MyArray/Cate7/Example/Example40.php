<?php

namespace MyArray\Cate7\Example;

class Example40
{
    public static function NthSmallest($arr, $pos)
    {
        sort($arr);
        return $arr[$pos - 1];
    }
}
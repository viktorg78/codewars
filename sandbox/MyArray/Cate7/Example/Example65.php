<?php

namespace MyArray\Cate7\Example;

class Example65
{
    public static function checkThreeAndTwo($arr)
    {
        $arr = array_values(array_count_values($arr));
        return count($arr) == 2 && ($arr[0] != 1 && $arr[1] != 1);
    }
}
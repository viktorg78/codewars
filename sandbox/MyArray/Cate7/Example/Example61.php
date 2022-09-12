<?php

namespace MyArray\Cate7\Example;

class Example61
{
    public static function scramble($str, $arr)
    {
        $arr = array_combine($arr, str_split($str));
        ksort($arr);
        return implode('', $arr);
    }
}
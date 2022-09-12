<?php

namespace MyArray\Cate7\Example;

class Example63
{
    public static function cupAndBalls($b, $arr)
    {
        array_map(function ($val) use (&$b) {
            if ($b == $val[0])
                $b = $val[1];
            elseif ($b == $val[1])
                $b = $val[0];
            return $val;
        }, $arr);
        return $b;
    }
}
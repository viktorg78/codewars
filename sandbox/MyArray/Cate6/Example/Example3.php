<?php

namespace MyArray\Cate6\Example;

class Example3
{
    public static function findUniq($a)
    {
        $a = array_count_values(array_map(function ($val){
            return (string)$val;
        }, $a));
        return array_search(1, $a);
    }
}
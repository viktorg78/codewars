<?php

namespace MyArray\Cate7\Example;

class Example74
{
    /**
     * @param $vector array
     * @return float
     */
    public static function magnitude($vector)
    {
        $arr = array_map(function ($val) {
            return abs(pow($val, 2));
        }, $vector);
        return sqrt(array_sum($arr));
    }
}
<?php

namespace MyArray\Cate7\Example;

class Example51
{
    /**
     * @param array $arr
     * @return int
     */
    public static function sumAverage(array $arr)
    {
        $arr = array_map(function ($val) {
            return array_sum($val) / count($val);
        }, $arr);
        return floor(array_sum($arr));
    }
}
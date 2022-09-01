<?php

namespace MyArray\Cate7\Example;

class Example48
{
    /**
     * @param $arr array
     * @param $mixedArr array
     * @return int
     */
    public static function findDeletedNumber(array $arr, array $mixedArr)
    {
        return (int)current(array_diff($arr, $mixedArr));
    }
}
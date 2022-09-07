<?php

namespace MyArray\Cate7\Example;

class Example54
{
    /**
     * @param $array array
     * @param $predicate
     * @return array
     */
    public static function reject($array, $predicate)
    {
        $arr = array_filter($array, $predicate);
        return array_values(array_diff($array, $arr));
    }
}
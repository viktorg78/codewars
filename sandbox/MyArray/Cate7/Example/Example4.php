<?php

namespace MyArray\Cate7\Example;

class Example4
{
    /**
     * @param array $arr
     * @return string
     */
    public static function oddEven(array $arr): string
    {
        $sum = array_sum($arr);
        return ($sum % 2) ? 'odd' : 'even';
    }
}
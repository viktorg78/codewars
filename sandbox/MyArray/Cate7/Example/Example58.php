<?php

namespace MyArray\Cate7\Example;

class Example58
{
    /**
     * @param array $a
     * @param array $b
     * @return int
     */
    public static function matchArrays(array $a, array $b)
    {
        return count($a) - count(array_diff($a, $b));
    }
}
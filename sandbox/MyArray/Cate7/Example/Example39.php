<?php

namespace MyArray\Cate7\Example;

class Example39
{
    public static function twoOldestAges($ages)
    {
        sort($ages);
        return array_splice($ages, count($ages) - 2);
    }
}
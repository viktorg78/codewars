<?php

namespace MyArray\Cate7\Example;

class Example5
{
    public static function maxProduct(array $arr, int $size): int
    {
        rsort($arr);
        return array_product(array_slice($arr, 0, $size));
    }
}
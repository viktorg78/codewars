<?php

namespace MyArray\Cate7\Example;

class Example3
{
    public static function productArray($arr)
    {
        $product = array_map(function ($id) use ($arr) {
            unset($arr[$id]);
            return array_product($arr);
        }, array_keys($arr));
        return $product;
    }
}

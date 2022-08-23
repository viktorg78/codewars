<?php

namespace MyArray\Cate7\Example;

class Example28
{
    /**
     * @param array $numbers
     * @return int
     */
    public static function sumOfMinimums(array $numbers): int
    {
        return array_sum(array_map('min', $numbers));
    }
}
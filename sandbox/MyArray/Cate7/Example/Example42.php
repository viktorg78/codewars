<?php

namespace MyArray\Cate7\Example;

class Example42
{
    public static function toNumberArray($stringArray)
    {
        return array_map('floatval', $stringArray);
    }
}
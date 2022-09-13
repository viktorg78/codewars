<?php

namespace MyArray\Cate7\Example;

class Example71
{
    public static function box($n)
    {
        $box = [];
        for ($i = 0; $i < $n; $i++) {
            $box[] = ($i == 0 || $i == $n - 1) ? str_repeat('-', $n) : '-' . str_repeat(' ', $n - 2) . '-';
        }
        return $box;
    }
}
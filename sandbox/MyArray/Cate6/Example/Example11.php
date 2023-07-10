<?php

namespace MyArray\Cate6\Example;

class Example11
{
    public static function deep_c(array $a, $i = 0): int
    {
        foreach ($a as $val) {
            $i++;
            if (is_array($val)) $i += self::deep_c($val);
        }
        return $i;
    }
}
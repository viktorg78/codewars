<?php

namespace MyArray\Cate7\Example;

class Example31
{
    public static function bubblesortOnce(array $a): array
    {
        for ($i = 0; $i < count($a) - 1; $i++) {
            list($val1, $val2) = [$a[$i], $a[$i + 1]];
            if ($val1 > $val2) {
                $a[$i] = $val2;
                $a[$i + 1] = $val1;
            }
        }
        return $a;
    }
}
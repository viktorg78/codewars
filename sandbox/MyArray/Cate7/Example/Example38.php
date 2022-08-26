<?php

namespace MyArray\Cate7\Example;
class Example38
{
    public static function rowWeights(array $arr)
    {
        $i = 0;
        return array_reduce($arr, function ($carry, $item) use (&$i) {
            if ($i % 2 == 0) {
                $carry[0] += $item;
            } else {
                $carry[1] += $item;
            }
            $i++;
            return $carry;
        }, [0, 0]);
    }
}
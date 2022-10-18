<?php

namespace MyArray\Cate6\Example;

class Example5
{
    public static function findEvenIndex($arr)
    {
        $result = -1;
        for ($item = 0; $item < count($arr); $item++) {
            $sum1 = array_sum(array_slice($arr, 0, $item, true));
            $sum2 = array_sum(array_slice($arr, $item + 1, null, true));
            if ($sum1 == $sum2) {
                $result = $item;
                break;
            }
        }
        return $result;
    }
}
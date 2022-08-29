<?php

namespace MyArray\Cate7\Example;

class Example41
{
    public static function trouble($x, $t)
    {
        $iter = count($x);
        for ($j = 0; $j <= $iter; $j++) {
            $arr = $x;
            for ($i = 0; $i < count($x); $i++) {
                $sum = $x[$i] + $x[$i + 1];
                if ($sum == $t) {
                    unset($arr[$i + 1]);
                    break;
                }
            }
            $x = array_values($arr);
        }
        return $x;
    }

    public static function trouble2(array $array, int $target): array
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            if ($array[$i] + $array[$i + 1] === $target) {
                array_splice($array, $i + 1, 1);
                $i--;
            }
        }
        return $array;
    }
}
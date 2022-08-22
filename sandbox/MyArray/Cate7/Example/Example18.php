<?php

namespace MyArray\Cate7\Example;

class Example18
{

    /**
     * @param array $array
     * @return int
     */
    public static function adjacentElementsProduct(array $array): int
    {
        $num = [];
        $i = 0;
        while ($i < count($array) - 1) {
            $num[] = $array[$i] * $array[$i + 1];
            $i++;
        }
        return max($num);
    }

    /**
     * @param $array
     * @return mixed
     */
    public static function adjacentElementsProduct2(array $array):int
    {
        for($i = 0; $i < count($array) - 1; $i++){
            $num[] = $array[$i]*$array[$i+1];
        }
        return max($num);
    }
}
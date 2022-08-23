<?php

namespace MyArray\Cate7\Example;

class Example27
{
    /**
     * @param array $numbers
     * @return array
     */
    public static function arrayLeaders(array $numbers): array
    {
        $arrLider = [];
        foreach ($numbers as $key => $val) {
            if ($val > array_sum(array_slice($numbers, $key + 1))) $arrLider[] = $val;
        }
        return $arrLider;
    }
}
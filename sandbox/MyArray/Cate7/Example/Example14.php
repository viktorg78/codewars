<?php

namespace MyArray\Cate7\Example;

class Example14
{
    /**
     * @param array $arr
     * @return array
     */
    public static function partlist(array $arr): array
    {
        $arrAns = [];
        for ($i = 1; $i <= count($arr) - 1; $i++)
            $arrAns[] = [implode(' ', array_slice($arr, 0, $i)), implode(' ', array_slice($arr, $i))];
        return $arrAns;
    }
}
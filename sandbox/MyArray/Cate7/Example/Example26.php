<?php

namespace MyArray\Cate7\Example;

class Example26
{
    /**
     * @param int $n
     * @return array
     */
    public static function extraPerfect(int $n): array
    {
        $array = [];
        for ($i = 1; $i <= $n; $i++) {
            $bin = decbin($i);
            if ($bin[0] == '1' && $bin[strlen($bin) - 1] == '1') {
                $array[] = $i;
            }
        }
        return $array;
    }

    /**
     * @param $n
     * @return array
     */
    public static function extraPerfect1(int $n):array
    {
        return range(1, $n, 2);
    }
}
<?php

namespace MyArray\Cate7\Example;

class Example12
{
    /**
     * @param array $a
     * @param int $limit
     * @return bool
     */
    public static function smallEnough(array $a, int $limit):bool
    {
        foreach ($a as $value){
            if($value > $limit) return false;
        }
        return true;
    }

    /**
     * @param array $a
     * @param int $limit
     * @return bool
     */
    public static function smallEnough2(array $a, int $limit):bool
    {
        return max($a) <= $limit;
    }
}
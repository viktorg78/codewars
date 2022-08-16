<?php

namespace MyArray\Cate7\Example;

class Example13
{
    /**
     * @param int $start
     * @param int $end
     * @return int
     */
    public static function dontGiveMeFive(int $start, int $end): int
    {
        $arr = range($start, $end);
        $arr = array_diff($arr, preg_grep('/5/', $arr));
        return count($arr);
    }
}

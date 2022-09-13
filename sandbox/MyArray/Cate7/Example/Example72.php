<?php

namespace MyArray\Cate7\Example;

class Example72
{
    /**
     * @param $baubles int
     * @param $branches int
     * @return array|string
     */
    public static function baublesOnTree($baubles, $branches)
    {
        if ($branches == 0) return 'Grandma, we will have to buy a Christmas tree first!';
        $j = 0;
        $arrBranches = array_fill(0, $branches, 0);
        for ($i = 0; $i < $baubles; $i++) {
            $arrBranches[$j] += 1;
            $j == $branches - 1 ? $j = 0 : $j++;
        }
        return $arrBranches;
    }
}
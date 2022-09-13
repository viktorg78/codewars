<?php

namespace MyArray\Cate7\Example;

class Example70
{
    /**
     * @param $nums array
     * @param $str string
     * @return string
     */
    public static function missing($nums, $str)
    {
        sort($nums);
        $arrStr = strtolower(str_replace(' ', '', $str));
        $arrUse = array_map(function ($val) use ($arrStr) {
            return $arrStr[$val];
        }, $nums);
        return array_search(false, $arrUse) ? 'No mission today' : implode($arrUse);
    }
}
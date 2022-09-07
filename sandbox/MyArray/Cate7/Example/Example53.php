<?php

namespace MyArray\Cate7\Example;

class Example53
{
    public static function maxGap($nums)
    {
        sort($nums);
        $n = $nums[0];
        $m = [];
        foreach ($nums as $val) {
            $m[] = abs($n - $val);
            $n = $val;
        }
        return max($m);
    }
}
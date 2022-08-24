<?php

namespace MyArray\Cate7\Example;

class Example33
{
    /**
     * @param array $nums
     * @param int $value
     * @return int
     */
    public static function minimumSteps(array $nums, int $value): int
    {
        sort($nums);
        $sum = 0;
        $ans = 0;
        foreach ($nums as $val) {
            $sum += $val;
            if ($sum >= $value) break;
            $ans++;
        }
        return $ans;
    }

    /**
     * @param array $nums
     * @param int $value
     * @return int
     */
    public static function minimumSteps2(array $nums, int $value): int
    {
        sort($nums, SORT_NUMERIC);
        return array_reduce(
            $nums,
            function ($acc, $item) use ($value) {
                return $acc[0] < $value ? [$acc[0] + $item, $acc[1] + 1] : $acc;
            }, [0, -1])[1];
    }
}

<?php

namespace MyArray\Cate7\Example;

class Example55
{
    public static function map_population_fit($population, $fitness)
    {
        return array_map(function ($val) use ($fitness) {
            $arr['chromosome'] = $val;
            $arr['fitness'] = count(array_filter(str_split($val), $fitness)) / (count(str_split($val)));
            return $arr;
        }, $population);
    }
}

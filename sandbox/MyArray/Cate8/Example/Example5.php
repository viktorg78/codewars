<?php

/*
 * Учитывая массив целых чисел, вернуть новый массив с удвоением каждого значения.
 * пример
 * [1, 2, 3] --> [2, 4, 6]
 */

namespace MyArray\Cate8\Example;

class Example5
{
    /** @var array */
    private $date;
    /** @var array */
    private $ans;

    public function __construct(array $date)
    {
        $this->date = $date;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = array_map(function ($n)
        {
            return $n*2;
        },$this->date);
    }

    public function getAns()
    {
        return $this->ans;
    }
}

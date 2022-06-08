<?php

/*
 * Учитывая непустой массив целых чисел, вернуть результат умножения значений вместе по порядку.
 * Пример:
 * [1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24
 */

namespace MyArray\Cate8\Example;

class Example12
{
    /** @var array */
    private $date;
    /** @var int */
    private $ans = 1;

    public function __construct(array $date)
    {
        $this->date = $date;
        $this->solution();
    }

    private function solution()
    {
        foreach ($this->date as $val) {
            $this->ans *= $val;
        }
    }

    public function getSolution()
    {
        return $this->ans;
    }

}
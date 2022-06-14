<?php

/*
 * Завершите функцию, которая принимает два аргумента и возвращает все числа, которые делятся на заданный делитель.
 * Первый аргумент — это массив чисел, а второй — делитель.
 *
 * [1, 2, 3, 4, 5, 6], 2 --> [2, 4, 6]
 */

namespace MyArray\Cate8\Example;

class Example22
{
    /** @var array */
    private $dataArr;
    /** @var int */
    private $dataDivider;
    /** @var array */
    private $ans;

    public function __construct(array $dataArr, $dataDivider)
    {
        $this->dataArr = $dataArr;
        $this->dataDivider = $dataDivider;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = array_values(
            array_filter($this->dataArr, function ($n) {
                return $n % $this->dataDivider == 0;
            })
        );
    }

    public function getAns()
    {
        return $this->ans;
    }
}

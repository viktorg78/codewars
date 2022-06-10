<?php

/*
 * Учитывая массив целых чисел в виде строк и чисел, верните сумму значений массива, как если бы все они были числами.
 * Верните ответ в виде числа.
 */

namespace MyArray\Cate8\Example;

class Example19
{
    /** @var array */
    private $data;
    /** @var int */
    private $ans;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = array_sum(array_map(function ($n) {
                return is_int($n) ? $n : intval($n);
            }, $this->data)
        );
    }

    public function getAns()
    {
        return $this->ans;
    }
}

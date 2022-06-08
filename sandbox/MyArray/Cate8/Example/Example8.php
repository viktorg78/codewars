<?php

/*
 * Вы получаете массив чисел, возвращаете сумму всех положительных.
 * Упражнение [1,-4,7,12] => 1 + 7 + 12 = 20
 * Примечание: если суммировать нечего, сумма по умолчанию равна 0.
 */

namespace MyArray\Cate8\Example;

class Example8
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
        $arr = array_filter($this->data,
            function ($n) {
                return $n > 0;
            }
        );
        $this->ans = empty($arr) ? 0 : array_sum($arr);
    }

    public function getAns()
    {
        return $this->ans;
    }
}

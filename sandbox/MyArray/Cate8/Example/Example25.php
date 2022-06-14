<?php

/*
 * Вы ведете своего сына в лес, чтобы увидеть обезьян. Вы знаете, что там есть определенное число (n),
 * но ваш сын слишком мал, чтобы просто оценить полное число, ему приходится начинать считать их с 1.
 * Как хороший родитель, вы будете сидеть и считать с ним. Учитывая число (n), заполните массив всеми числами
 * до этого числа включительно, но исключая ноль.
 *
 * 10 --> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
 *  1 --> [1]
 */

namespace MyArray\Cate8\Example;

class Example25
{
    /** @var int */
    private $data;
    /** @var array */
    private $ans;

    /**
     * @param $data int
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = range(1, $this->data);
    }

    /**
     * @return array
     */
    public function getAns()
    {
        return $this->ans;
    }
}
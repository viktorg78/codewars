<?php

/*
 * Напишите функцию, которая принимает массив чисел и возвращает сумму чисел.
 * Числа могут быть отрицательными или нецелыми. Если массив не содержит чисел, вы должны вернуть 0.
 * Примеры
 *
 * Ввод: [1, 5.2, 4, 0, -1]
 * Выход: 9,2
 *
 * Вход: []
 * Выход: 0
 */

namespace MyArray\Cate8\Example;

class Example23
{
    /** @var array */
    private $data;
    /** @var mixed */
    private $ans;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        empty($this->data) ? $this->ans = 0 : $this->ans = array_sum($this->data);
    }

    public function getAns()
    {
        return $this->ans;
    }
}
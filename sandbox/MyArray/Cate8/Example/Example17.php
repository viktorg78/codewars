<?php

/*
 * Конец учебного года, судьбоносный момент твоего школьного отчета. Средние значения должны быть рассчитаны.
 * Все ученики подходят к вам и умоляют вас подсчитать для них их средний балл. Легкий ! Вам просто нужно написать сценарий.
 * Возвращает среднее значение данного массива, округленное до ближайшего целого числа.
 * Массив никогда не будет пустым.
 */

namespace MyArray\Cate8\Example;

class Example17
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
        $this->ans = (int)(array_sum($this->data) / count($this->data));
    }

    public function getAns()
    {
        return $this->ans;
    }
}

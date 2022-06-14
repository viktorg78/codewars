<?php

/*
 * На ежегодном семейном собрании семье нравится находить возраст самого старшего из живущих членов семьи и возраст
 * самого младшего члена семьи и вычислять разницу между ними.
 *
 * Вам будет предоставлен массив возрастов всех членов семьи в любом порядке. Возраст будет указан в целых числах,
 * поэтому ребенку в возрасте 5 месяцев будет присвоен «возраст» равный 0. Верните новый массив (кортеж в Python)
 * с [самый младший возраст, самый старший возраст, разница между самым младшим и самым старшим возраст].
 */

namespace MyArray\Cate8\Example;

class Example24
{
    /** @var array */
    private $data;
    /** @var array */
    private $ans;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = [];

        $max = max($this->data);
        $min = min($this->data);

        array_push($this->ans, $min, $max, $max - $min);
    }

    public function getAns()
    {
        return $this->ans;
    }
}

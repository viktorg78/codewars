<?php

/*
 * Вам будет дан вектор строк. Вы должны отсортировать его в алфавитном порядке (с учетом регистра и на основе значений символов ASCII),
 * а затем вернуть первое значение.
 * Возвращаемое значение должно быть строкой и содержать «***» между каждой буквой.
 * Вы не должны удалять или добавлять элементы из/в массив.
 */

namespace MyArray\Cate8\Example;

class Example18
{
    /** @var array */
    private $data;
    /** @var string */
    private $asn;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        sort($this->data);
        $this->asn = implode('***', str_split($this->data[0]));
    }

    public function getAsn()
    {
        return $this->asn;
    }
}

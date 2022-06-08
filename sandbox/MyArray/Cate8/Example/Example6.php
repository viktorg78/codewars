<?php

/*
 * Разбить предложение
 *
 * Напишите функцию, которая берет массив слов, объединяет их в предложение и возвращает предложение.
 * Вы можете игнорировать необходимость очистки слов или добавления знаков препинания, но вы должны добавлять пробелы между каждым словом.
 * Будьте внимательны, не должно быть пробела ни в начале, ни в конце предложения!
 *
 * пример
 * ['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'
 */

namespace MyArray\Cate8\Example;

class Example6
{
    /** @var array */
    private $data;
    /** @var string */
    private $ans;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $this->ans = trim(implode(' ', $this->data));
    }

    /**
     * @return string
     */
    public function getAns(): string
    {
        return $this->ans;
    }

}

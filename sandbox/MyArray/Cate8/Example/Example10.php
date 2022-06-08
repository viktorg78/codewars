<?php

/*
 * Сможете ли вы найти иголку в стоге сена?
 * Напишите функцию findNeedle(), которая принимает массив, полный мусора, но содержащий одну «иглу».
 * После того, как ваша функция найдет иглу, она должна вернуть сообщение (в виде строки), в котором говорится:
 * «найдена игла в позиции» плюс индекс, в котором она была найдена, поэтому:
 *
 * ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5"
 *
 * Примечание. В COBOL он должен возвращать  "found the needle at position 6"
 */
namespace MyArray\Cate8\Example;

class Example10
{
    /** @var array */
    private $data;
    /** @var string */
    private $ans;
    const NEEDLE = 'needle';

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->solution();
    }

    private function solution()
    {
        $key = array_search(self::NEEDLE, $this->data);
        $this->ans = 'found the needle at position '.++$key;
    }

    public function getAms()
    {
        return $this->ans;
    }

}
<?php
/*
*  Возьмите массив и удалите каждый второй элемент из массива. Всегда сохраняйте первый элемент и начинайте удаление со следующего элемента.
 * задание:
 * ["Keep", "Remove", "Keep", "Remove", "Keep", ...] --> ["Keep", "Keep", "Keep", ...]
 * Ни один из массивов не будет пустым, так что вам не о чем беспокоиться!
*/

namespace MyArray\Cate8\Example;

class Example4
{
    /** @var array */
    private $data;
    /** @var array */
    private $answer;

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
        $this->answer = array_filter($this->data,
            function ($n) {
                return !($n & 1);
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    /**
     * @return array
     */
    public function getAnswer(): array
    {
        return $this->answer;
    }
}
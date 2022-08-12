<?php

namespace MyArray\Cate7\Example;

class Example2
{
    /** @var array */
    private $arr;

    function __construct()
    {
        $this->arr = array_merge(range('z', 'a'),['!','?',' ']);
        $this->arr = array_combine(range(1, count($this->arr)), $this->arr);
    }

    /**
     * @param $n array
     * @return string
     */
    public function arrToStr($n)
    {
        $arr1 = array_map(function ($n) {
            return $this->arr[$n];
        }, $n);
        return implode('', $arr1);
    }
}
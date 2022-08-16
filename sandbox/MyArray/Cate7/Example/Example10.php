<?php

namespace MyArray\Cate7\Example;

class Example10
{
    public static function removeRotten($fruitBasket): array
    {
        if (gettype($fruitBasket) == 'NULL') return [];
        return array_map(function ($fruitBasket) {
            return stristr($fruitBasket, 'rotten') ? mb_strtolower(str_replace('rotten', '', $fruitBasket)) : $fruitBasket;
        }, $fruitBasket);
    }
}

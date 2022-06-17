<?php

/*
 * Цель игры «Утка, утка, гусь» — ходить по кругу, нажимая на голову каждого игрока, пока не будет выбран один из них.
 *
 * Задача: Учитывая массив объектов Player (массив ассоциативных массивов в PHP) и индекс (на основе 1),
 * вернуть имя выбранного игрока (имя является свойством объектов Player, например Player.name)
 */
namespace MyArray\Cate8\Example;

class Example26
{
    /** @var array */
    private $players;
    /** @var int */
    private $goose;

    private $ans;

    public function __construct($players, $goose)
    {
        $this->players = $players;
        $this->goose = $goose;
        $this->solution();
    }

    private function solution()
    {
        $krug = (int)($this->goose / count($this->players));
        $prox = count($this->players) * $krug;
        $ind = $this->goose - $prox;
        $this->ans = $this->players[--$ind]["name"];
    }

    public function getAns()
    {
        return $this->ans;
    }
}
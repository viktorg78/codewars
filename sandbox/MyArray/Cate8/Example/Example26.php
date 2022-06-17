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
        $this->solution2();
    }

    private function solution()
    {
        $count = count($this->players);
        $krug = (int)($this->goose / $count);
        $prox = $count * $krug;
        $ind = ($this->goose - $prox);
        if ($krug > 0 && $ind == 0) {
            $this->ans = $this->players[--$count]["name"];
        } else {
            $this->ans = $this->players[--$ind]["name"];
        }
    }

    private function solution2()
    {
        $this->ans = $this->players[($this->goose - 1) % count($this->players)]['name'];
    }

    public function getAns()
    {
        return $this->ans;
    }
}

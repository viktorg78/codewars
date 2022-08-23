<?php

namespace MyArray\Cate7\Example;

class Example24
{
    /**
     * @param int $h health
     * @param int $m monsters
     * @param int $dm damage
     * @return string
     */
    public static function killMonsters(int $h, int $m, int $dm): string
    {
        $hitM = 0;
        while (true) {
            if ($m <= 0) break;
            if ($h <= 0) break;
            $m -= 3;
            if ($m > 0) {
                $hitM++;
                $h -= $dm;
            }
        }
        return $h <= 0 ? 'hero died' : 'hits: ' . $hitM . ', damage: ' . $dm * $hitM . ', health: ' . $h;
    }

    public static function killMonsters1($h, $m, $dm)
    {
        $hit = ($m - 3) > 0 ? ceil(($m - 3) / 3) : 0;

        $dm *= $hit;
        $h -= $dm;

        return $h <= 0 ? "hero died" : "hits: $hit, damage: $dm, health: $h";
    }
}
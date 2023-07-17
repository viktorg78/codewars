<?php

namespace MyArray\Cate6\Example;

class Example14
{
    public static function maze_runner($maze, $directions): string
    {
        $startX = 0;
        $startY = 0;
        $line = 0;
        foreach ($maze as $i => $value) {
            $y = array_search('2', $value);
            if ($y) {
                $startX = $i;
                $startY = $y;
            }
            $line = count($value);
        }

        foreach ($directions as $val) {
            if ($val == 'N') $startX--;
            if ($val == 'S') $startX++;
            if ($val == 'E') $startY++;
            if ($val == 'W') $startY--;
            if ($startX < 0 || $startY < 0 || $startX >= $line || $startY >= $line) return 'Dead';
            if ($maze[$startX][$startY] == 3) return 'Finish';
            if ($maze[$startX][$startY] == 1) return 'Dead';
        }
        return 'Lost';
    }
}
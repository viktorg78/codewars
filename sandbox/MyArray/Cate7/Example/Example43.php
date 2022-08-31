<?php

namespace MyArray\Cate7\Example;

class Example43
{
    /**
     * @param array $a
     * @return string
     */
    public static function part(array $a)
    {
        $arr = [
            'Partridge',
            'PearTree',
            'Chat',
            'Dan',
            'Toblerone',
            'Lynn',
            'AlphaPapa',
            'Nomad'
        ];

        $i = 'Mine\'s a Pint';
        return array_reduce($a, function ($carry, $item) use ($arr, &$i) {
            if (in_array($item, $arr)) $i .= '!';
            if ($i !== 'Mine\'s a Pint') return $i;
            else return 'Lynn, I\'ve pierced my foot on a spike!!';
        });
    }

    public static function part2(array $a)
    {
        $terms = ['Partridge', 'PearTree', 'Chat', 'Dan', 'Toblerone', 'Lynn', 'AlphaPapa', 'Nomad'];
        $count = count(array_intersect($a, $terms));
        return $count ? "Mine's a Pint" . str_repeat("!", $count) : "Lynn, I've pierced my foot on a spike!!";
    }
}
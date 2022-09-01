<?php

namespace MyArray\Cate7\Example;

class Example47
{
    /**
     * @param $a
     * @return string
     */
    public static function planeSeat($a)
    {
        $litra = [
            'Left' =>
                [
                    1 => 'A',
                    2 => 'B',
                    3 => 'C'
                ],
            'Middle' =>
                [
                    1 => 'D',
                    2 => 'E',
                    3 => 'F'
                ],
            'Right' =>
                [
                    1 => 'G',
                    2 => 'H',
                    3 => 'K'
                ]
        ];
        $place[] = (int)substr($a, 0, -1);
        $place[] = substr($a, -1);

        $search = null;
        foreach ($litra as $key => $value) {
            if (array_search($place[1], $value)) {
                $search = $key;
                break;
            }
        }

        if ($search) {
            if ($place[0] <= 20) {
                $ans = 'Front-' . $search;
            } elseif ($place[0] <= 40) {
                $ans = 'Middle-' . $search;
            } elseif ($place[0] <= 60) {
                $ans = 'Back-' . $search;
            } else {
                $ans = 'No Seat!!';
            }
        } else $ans = 'No Seat!!';

        return $ans;
    }

    /**
     * @param $a
     * @return string
     */
    public static function planeSeat2($a)
    {
        $matched = preg_match("/^([1-9]|[1-5]\d|60)([A-HK])$/", $a, $matches);
        if (!$matched) {
            return "No Seat!!";
        }
        $x = $matches[1] <= 20 ? "Front" : ($matches[1] <= 40 ? "Middle" : "Back");
        $y = $matches[2] <= "C" ? "Left" : ($matches[2] <= "F" ? "Middle" : "Right");
        return "$x-$y";
    }
}
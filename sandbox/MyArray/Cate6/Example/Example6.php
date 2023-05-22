<?php

namespace MyArray\Cate6\Example;

class Example6
{
    public static function iter_pi($epsilon = 0.1)
    {
        $arr = [];
        $temp = 0;
        $j = 1;
        $g = 3;
        $pogreh = 4;
        $i = 0;
        while ($pogreh > $epsilon) {
            $i++;
            if ($i%2==1){$temp += 4/$j;  $j += 4;}
            else{$temp -= 4/$g; $g +=4;}
            $pogreh = abs(M_PI - $temp);
        }
        $arr[] = $i;
        $arr[] = round($temp, 10);
        return $arr;
    }




}
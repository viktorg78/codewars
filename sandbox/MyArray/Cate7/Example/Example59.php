<?php

namespace MyArray\Cate7\Example;

class Example59
{
    public static function driver($data)
    {
        $FirstName = array_fill(0, 5, 9);
        $FirstName = mb_substr(implode(array_replace_recursive($FirstName, str_split(mb_strtoupper($data[2])))), 0, 5);
        $month =
            [
                '01' => 'Jan',
                '02' => 'Feb',
                '03' => 'Mar',
                '04' => 'Apr',
                '05' => 'May',
                '06' => 'Jun',
                '07' => 'Jul',
                '08' => 'Aug',
                '09' => 'Sep',
                '10' => 'Oct',
                '11' => 'Nov',
                '12' => 'Dec'
            ];
        $str = $FirstName;
        $dataT = explode('-', $data[3]);
        $str .= $dataT[2][strlen($dataT[2]) - 2];
        $F = str_split(array_search(mb_substr($dataT[1], 0, 3), $month));
        $F[0] = $F[0] + 5;
        $F = implode('', $F);
        $str .= ($data[4] === 'F') ? $F : array_search(mb_substr($dataT[1], 0, 3), $month);
        $str .= $dataT[0];
        $str .= $dataT[2][strlen($dataT[2]) - 1];
        $str .= $data[0][0];
        $str .= !isset($data[1][0]) ? 9 : $data[1][0];
        $str .= '9AA';
        return $str;
    }
}
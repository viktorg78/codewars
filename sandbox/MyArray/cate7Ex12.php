<?php

use MyArray\Cate7\Example\Example12;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет предоставлен массив и предельное значение.<br>
Вы должны убедиться, что все значения в массиве ниже или равны предельному значению.<br>
Если они есть, верните true. В противном случае верните ложь.<br>
Вы можете предположить, что все значения в массиве являются числами.<br>
<br>
<a href="https://www.codewars.com/kata/57cc981a58da9e302a000214">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$a = [78, 117, 110, 99, 104, 117, 107, 115];
$limit = 200;

echo '<b>ответ: </b><br>';
echo  Example12::smallEnough($a, $limit) ? 'true': 'false';
echo '<br><b>Конец.</b>';

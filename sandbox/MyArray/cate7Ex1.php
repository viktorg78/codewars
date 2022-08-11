<?php

use MyArray\Cate7\Example\Example1;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Сумма нечетных чисел<br>
<br>
Задача: Дан треугольник последовательных нечетных чисел:<br>
Вычислите сумму чисел в n-й строке этого треугольника (начиная с индекса 1), например: (Вход - Выход)<br>
<a href="https://www.codewars.com/kata/55fd2d567d94ac3bc9000064">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$x = 19;
echo 'строка № ' . $x;
echo '<br>';
echo '<b>ответ: </b>' . Example1::getSumm($x);

echo '<br><b>Конец.</b>';

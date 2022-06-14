<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Создайте функцию с двумя аргументами, которая будет возвращать массив первых (n) кратных (x).<br>
Предположим, что и заданное число, и количество подсчетов будут положительными числами больше 0.<br>
Верните результаты в виде массива (или списка в Python, Haskell или Elixir).<br>
<br>
Примеры:<br>
countBy(1,10) // should return [1,2,3,4,5,6,7,8,9,10]<br>
countBy(2,5) // should return [2,4,6,8,10]
<br>
</div>';

echo '<b>Начало.</b><br>';
$x = 3;
$n = 10;
echo "массив первых ($n) кратных ($x)<br>";
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example20($x, $n);
myDamp($ex->getZ());
echo '<br><b>Конец.</b>';


<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Учитывая непустой массив целых чисел, вернуть результат умножения значений вместе по порядку.<br>
Пример:<br>
[1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24
</div>';

$arr = [1, 2, 3, 4];
echo '<b>Начало.</b><br>';
myDamp($arr);

$ex = new \MyArray\Cate8\Example\Example12($arr);

echo '<b>ответ: </b>';
echo $ex->getSolution();

echo '<br><b>Конец.</b>';

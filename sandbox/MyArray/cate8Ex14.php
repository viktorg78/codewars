<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Учитывая массив чисел, проверьте, являются ли какие-либо числа кодами символов для строчных гласных (a, e, i, o, u).<br>
Если это так, измените значение массива на строку этой гласной.<br>
Вернуть полученный массив.
</div>';

$arr = [101, 121, 101];

echo '<b>Начало.</b><br>';
myDamp($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example14($arr);
myDamp($ex->getAns());

echo '<br><b>Конец.</b>';


<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет дан массив a и значение x. Все, что вам нужно сделать, это проверить, содержит ли предоставленный массив значение.<br>
Массив может содержать числа или строки. Х может быть любым.<br>
Возвращает true, если массив содержит значение, и false, если нет.
</div>';

echo '<b>Начало.</b><br>';

$arr = ['a', 'b', 'c', 'd', 'e', "f"];
$x = "a";
echo "Ищем \"$x\", в массиве:";
myDamp($arr);

echo '<b>ответ: </b>';

$ex = new \MyArray\Cate8\Example\Example15($arr, $x);
echo ($ex->getAns()) ? 'ДА' : 'НЕТ';
echo '<br><b>Конец.</b>';



<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Напишите функцию, которая принимает массив чисел и возвращает сумму чисел.<br>
Числа могут быть отрицательными или нецелыми. Если массив не содержит чисел, вы должны вернуть 0.<br>
Примеры<br>
<br>
Ввод: [1, 5.2, 4, 0, -1]<br>
Выход: 9,2<br>
<br>
Вход: []<br>
Выход: 0<br>
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = [1, 5.2, 4, 0, -1];
myDamp($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example23($arr);
echo $ex->getAns();
echo '<br><b>Конец.</b>';




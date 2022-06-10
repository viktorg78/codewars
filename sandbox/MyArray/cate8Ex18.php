<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет дан вектор строк. Вы должны отсортировать его в алфавитном порядке (с учетом регистра и на основе значений символов ASCII),<br>
а затем вернуть первое значение.<br>
Возвращаемое значение должно быть строкой и содержать «***» между каждой буквой.<br>
Вы не должны удалять или добавлять элементы из/в массив.
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = ["turns", "out", "random", "test", "cases", "are", "easier", "than", "writing", "out", "basic", "ones"];
myDamp($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example18($arr);
echo $ex->getAsn();
echo '<br><b>Конец.</b>';

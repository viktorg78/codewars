<?php

use MyArray\Cate7\Example\Example14;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Напишите список функций, который дает все способы разделить список (массив) по крайней мере из двух элементов на две непустые части.<br>
Каждые две непустые части будут в паре (или массиве для языков без кортежей или structin C - C: см. Примеры тестовых случаев - )<br>
Каждая часть будет в строке<br>
Элементы пары должны быть в том же порядке, что и в исходном массиве.<br>
Примеры возвратов на разных языках:<br>
a = ["az", "toto", "picaro", "zone", "kiwi"] --><br>
[["az", "toto picaro zone kiwi"], ["az toto", "picaro zone kiwi"], ["az toto picaro", "zone kiwi"], ["az toto picaro zone", "kiwi"]]<br>
<br>
<a href="https://www.codewars.com/kata/56f3a1e899b386da78000732">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$arr = ["I", "wish", "I", "hadn't", "come"];
myDamp($arr);
echo '<b>ответ: </b><br>';
myDampPrint(Example14::partlist($arr));
echo '<br><b>Конец.</b>';

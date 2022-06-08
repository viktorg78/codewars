<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Разбить предложение<br><br>
Напишите функцию, которая берет массив слов, объединяет их в предложение и возвращает предложение.<br>
Вы можете игнорировать необходимость очистки слов или добавления знаков препинания, но вы должны добавлять пробелы между каждым словом.<br>
Будьте внимательны, не должно быть пробела ни в начале, ни в конце предложения!<br>
 <br>
пример<br>
[\'hello\', \'world\', \'this\', \'is\', \'great\']  =>  \'hello world this is great\'</div>';

echo '<b>Начало.</b><br>';

$arr = ['hello', 'world', 'this', 'is', 'great'];
echo 'начальный массив';
myDamp($arr);
$ex = new \MyArray\Cate8\Example\Example6($arr);
echo '<b>ответ: </b>';
echo $ex->getAns();

echo '<br><b>Конец.</b>';
<?php

use MyArray\Cate7\Example\Example43;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
В честь сегодняшнего выхода новой книги моего Героя: «Алан Партридж: Кочевник», у нас есть новая серия ката, посвященная самому великому человеку.<br>
Задача<br>
Учитывая набор терминов, если какой-либо из этих терминов относится к Алану Партриджу, верните Mine\'s a Pint!<br>
Количество восклицательных знаков (!) после t должно определяться количеством терминов, связанных с Аланом, которые вы найдете в данном массиве (x).<br>
Соответствующие термины следующие:<br>
Partridge<br>
PearTree<br>
Chat<br>
Dan<br>
Toblerone<br>
Lynn<br>
AlphaPapa<br>
Nomad<br>
Если вы не найдете связанных терминов, верните Lynn, I\'ve pierced my foot on a spike!!<br>
<br>
<a href="https://www.codewars.com/kata/5808c8eff0ed4210de000008">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = ['Grouse', 'Partridge', 'Pheasant', 'Goose', 'Starling', 'Robin', 'Thrush', 'Emu', 'PearTree', 'Chat', 'Dan', 'Square', 'Toblerone', 'Lynn', 'AlphaPapa', 'BMW', 'Graham', 'Tool', 'Nomad', 'Finger', 'Hamster'];
myDamp($a);
echo '<b>ответ: </b><br>';
myDamp(Example43::part($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

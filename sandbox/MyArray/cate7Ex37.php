<?php

use MyArray\Cate7\Example\Example37;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Давайте создадим прокручиваемый текст!<br>
Ваша задача — завершить функцию, которая принимает строку и возвращает массив со всеми возможными поворотами данной строки в верхнем регистре.<br>
Пример<br>
scrollingText(\'codewars\') должен возвращать:<br>
[ "CODEWARS",<br>
  "ODEWARSC",<br>
  "DEWARSCO",<br>
  "EWARSCOD",<br>
  "WARSCODE",<br>
  "ARSCODEW"<br>
  "RSCODEWA",<br>
  "SCODEWAR" ]<br>
Удачи!<br>
<br>
<a href="https://www.codewars.com/kata/5a995c2aba1bb57f660001fd">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$text = 'codewars';
myDamp($text);
echo '<b>ответ: </b><br>';
myDamp(Example37::scrollingText($text));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

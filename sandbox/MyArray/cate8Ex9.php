<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Напишите функцию для преобразования имени в инициалы. Это ката строго состоит из двух слов с одним пробелом между ними.<br>
На выходе должны быть две заглавные буквы с точкой, разделяющей их.<br>
Это должно выглядеть так:<br>
<br>
Sam Harris => S.H<br>
patrick feeney => P.F<br>
</div>';

echo '<b>Начало.</b><br>';
$str = 'Sam Harris';
echo 'Строка: ' . $str;
echo '<br>';
$ex = new \MyArray\Cate8\Example\Example9($str);
echo '<b>ответ: </b>';
echo $ex->getStr();

echo '<br><b>Конец.</b>';

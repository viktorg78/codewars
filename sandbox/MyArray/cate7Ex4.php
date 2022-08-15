<?php

use MyArray\Cate7\Example\Example4;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Задача:<br>
Дан список целых чисел, определить, является ли сумма его элементов четной или нечетной.<br>
Дайте свой ответ в виде строки, соответствующей «нечетному» или «четному».<br>
Если входной массив пуст, рассматривайте его как: [0] (массив с нулем).<br>
<br>
<a href="https://www.codewars.com/kata/5949481f86420f59480000e7">Задача</a>
</div>';
echo '<br>';

echo '<b>Начало.</b><br>';
$arr = [10, 5];
myDampPrint($arr);

echo '<b>ответ: </b><br>';

echo Example4::oddEven($arr);

echo '<br><b>Конец.</b>';

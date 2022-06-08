<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Учитывая строку цифр, вы должны заменить любую цифру ниже 5 на «0», а любую цифру 5 и выше на «1». Верните полученную строку.<br>
 Примечание: ввод никогда не будет пустой строкой
</div>';

$str = '45385593107843568';
echo '<b>Начало.</b><br>';

echo 'Входящая строка: ' . $str;
echo '<br>';
$ex = new \MyArray\Cate8\Example\Example11($str);
echo '<b>ответ: </b>';

echo $ex->getAns();

echo '<br><b>Конец.</b>';

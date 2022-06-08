<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Завершите функцию квадратной суммы, чтобы она возводила в квадрат каждое переданное ей число, а затем суммировала результаты.<br>
Например, для [1, 2, 2] он должен вернуть 9, потому что 1^2 + 2^2 + 2^2 = 9.
</div>';


echo '<b>Начало.</b><br>';
$arr = [1, 2, 2];
myDamp($arr);
$ex = new \MyArray\Cate8\Example\Example13($arr);
echo '<b>ответ: </b>';
echo $ex->getAns();

echo '<br><b>Конец.</b>';

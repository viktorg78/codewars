<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = [1, 1, 1, 1, 1, 1, 1, 2];
myDamp($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example17($arr);
echo $ex->getAns();
echo '<br><b>Конец.</b>';

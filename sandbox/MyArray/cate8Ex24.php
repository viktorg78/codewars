<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
На ежегодном семейном собрании семье нравится находить возраст самого старшего из живущих членов семьи и возраст<br>
самого младшего члена семьи и вычислять разницу между ними.<br>
<br>
Вам будет предоставлен массив возрастов всех членов семьи в любом порядке. Возраст будет указан в целых числах,<br>
поэтому ребенку в возрасте 5 месяцев будет присвоен «возраст» равный 0. Верните новый массив (кортеж в Python)<br>
с [самый младший возраст, самый старший возраст, разница между самым младшим и самым старшим возраст].<br>
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = [82, 15, 6, 38, 35];
myDamp($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example24($arr);
myDamp($ex->getAns());
echo '<br><b>Конец.</b>';





<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Цель игры «Утка, утка, гусь» — ходить по кругу, нажимая на голову каждого игрока, пока не будет выбран один из них.<br>
<br>
Задача: Учитывая массив объектов Player (массив ассоциативных массивов в PHP) и индекс (на основе 1),<br>
вернуть имя выбранного игрока (имя является свойством объектов Player, например Player.name)<br>
<br>
</div>';

echo '<b>Начало.</b><br>';
$arr = [["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"]];
myDampPrint($arr);
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example26($arr,9);
echo $ex->getAns();
echo '<br><b>Конец.</b>';







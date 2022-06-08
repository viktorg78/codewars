<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>Сможете ли вы найти иголку в стоге сена?<br>
 Напишите функцию findNeedle(), которая принимает массив, полный мусора, но содержащий одну «иглу».<br>
 После того, как ваша функция найдет иглу, она должна вернуть сообщение (в виде строки), в котором говорится:<br>
 «найдена игла в позиции» плюс индекс, в котором она была найдена, поэтому:<br>
 <br>
 ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5"<br>
 <br>
 Примечание. В COBOL он должен возвращать  "found the needle at position 6"
</div>';

$arr = ['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'];

echo '<b>Начало.</b><br>';

echo 'Начальный массив: ';
myDamp($arr);

$ex = new \MyArray\Cate8\Example\Example10($arr);

echo '<b>ответ: </b>';
echo $ex->getAms();

echo '<br><b>Конец.</b>';

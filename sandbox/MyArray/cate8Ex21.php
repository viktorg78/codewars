<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Нам нужен массив, но не какой-нибудь старый массив, а массив с содержимым!<br>
Напишите функцию, которая создает массив с числами от 0 до N-1 в нем.<br>
Например, следующий код создаст массив, содержащий числа от 0 до 4:<br>
arr(5) // => [0,1,2,3,4]<br>
Примечание. Этот параметр является необязательным. Таким образом, вы должны дать ему значение по умолчанию.
<br>
</div>';

echo '<b>Начало.</b><br>';
$x=5;
echo "Создать массив с числами от 0 до $x.<br>";
echo '<b>ответ: </b>';
$ex = new \MyArray\Cate8\Example\Example21($x);
myDamp($ex->getAns());

echo '<br><b>Конец.</b>';


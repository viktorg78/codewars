<?

use MyArray\Cate7\Example\Example57;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Найдите сумму нечетных чисел в массиве после кубирования исходных целых чисел.<br>
Функция должна возвращать undefined/None/nil/NULL, если какое-либо из значений не является числом.<br>
<br>
<a href="https://www.codewars.com/kata/580dda86c40fa6c45f00028a">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [1, 2, 3, 4];
myDamp($a);
echo '<b>ответ: </b><br>';
myDamp(Example57::cubeOdd($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

<?

use MyArray\Cate7\Example\Example64;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам дан список чисел (положительные/отрицательные целые числа), и вам нужно получить ближайшие записи заданного значения.<br>
Например:<br>
Дано число 10 и вам нужно получить ближайшее число из этого ряда: 1, 2, 3, 4, 6, 12. Ответ должен быть 12.<br>
<br>
<a href="https://www.codewars.com/kata/5b4f8e02578c6aae9700008b">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$number = -120;
$list = [-10, -20, -40, -80, -160, -320];
myDamp($number);
myDamp($list);
echo '<b>ответ: </b><br>';
myDamp(Example64::roundUp($number, $list));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

<?

use MyArray\Cate7\Example\Example65;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Получив массив ровно из 5 строк «a», «b» или «c» (символы в Java, символы в Fortran), проверьте, содержит ли массив три и два одинаковых значения.<br>
Примеры<br>
[\'a\', \'a\', \'a\', \'b\', \'b\'] == true // 3x \'a\' и 2x \'b\'<br>
[\'a\', \'b\', \'c\', \'b\', \'c\'] == false // 1x \'a\', 2x \'b\' и 2x \'c\'<br>
[\'а\', \'а\', \'а\', \'а\', \'а\'] == false // 5x \'а\'<br>
<br>
<a href="https://www.codewars.com/kata/5a9e86705ee396d6be000091">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$arr = ['a', 'a', 'c', 'c', 'c'];
myDamp($arr);
echo '<b>ответ: </b><br>';
myDamp(Example65::checkThreeAndTwo($arr));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

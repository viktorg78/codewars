<?

use MyArray\Cate6\Example\Example3;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Есть массив с некоторыми числами. Все числа равны, кроме одного. Попробуйте найти!<br>
findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2<br>
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55<br>
Гарантируется, что массив содержит не менее 3 чисел.<br>
Тесты содержат очень большие массивы, так что подумайте о производительности.<br>
<br>
<a href="https://www.codewars.com/kata/585d7d5adb20cf33cb000235">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a =  [ 1, 0, 0.55, 0, 1 ];
myDamp($a);
echo '<b>ответ: </b><br>';
myDamp(Example3::findUniq($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';


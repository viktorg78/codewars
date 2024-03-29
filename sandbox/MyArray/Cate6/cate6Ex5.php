<?

use MyArray\Cate6\Example\Example5;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Вам будет дан массив целых чисел. Ваша задача состоит в том, чтобы взять этот массив и найти индекс N, где сумма целых<br>
чисел слева от N равна сумме целых чисел справа от N. Если нет такого индекса, который мог бы это сделать, верните - 1.<br>
<br>
Например:<br>
Допустим, вам дан массив {1,2,3,4,3,2,1}:<br>
Ваша функция вернет индекс 3, потому что на 3-й позиции массива сумма левой части индекса ({1,2,3}) и сумма правой части индекса ({3,2, 1}) оба равны 6.<br>
<br>
Давайте посмотрим на другой.<br>
Вам дан массив {1,100,50,-51,1,1}:<br>
Ваша функция вернет индекс 1, потому что в 1-й позиции массива сумма левой части индекса ({1}) и сумма правой части индекса ({50,-51,1,1 }) оба равны 1.<br>
<br>
Последний:<br>
Вам дан массив {20,10,-80,10,10,15,35}<br>
В индексе 0 левая сторона {}<br>
Правая сторона {10,-80,10,10,15,35}<br>
Они оба равны 0 при сложении. (Пустые массивы равны 0 в этой задаче)<br>
Индекс 0 — это место, где левая и правая стороны равны.<br>
<br>
Примечание. Помните, что в большинстве языков программирования/скриптов индекс массива начинается с 0.<br>
<br>
Вход:<br>
Целочисленный массив длиной от 0 до 1000. Числа в массиве могут быть любыми целыми числами, положительными или отрицательными.<br>
Выход:<br>
Наименьший индекс N, где сторона слева от N равна стороне справа от N. Если вы не найдете индекс, соответствующий этим правилам, вы вернете -1.<br>
Примечание:<br>
Если вам дан массив с несколькими ответами, верните наименьший правильный индекс.<br>
<br>
<a href="https://www.codewars.com/kata/5679aa472b8f57fb8c000047">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$arr = [20,10,30,10,10,15,35];
myDamp($arr);
echo '<b>ответ: </b><br>';
myDamp(Example5::findEvenIndex($arr));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';




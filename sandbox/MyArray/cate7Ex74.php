<?

use MyArray\Cate7\Example\Example74;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Возвратите величину вектора, заданного как массив значений его компонентов.<br>
Вектор (2, 3, 5) будет представлен в виде массива, содержащего три значения с индексами 0, 1 и 2 соответственно.<br>
Массив всегда будет содержать не менее 2 и не более 100 элементов (2 ≤ vector.Length ≤ 100), каждый из которых будет находиться в диапазоне [-100, 100].<br>
Массив, содержащий четыре элемента, представляет собой вектор в четырехмерном пространстве.<br><br>
Дополнительная информация о нахождении длины вектора: <a href="http://farside.ph.utexas.edu/teaching/301/lectures/node28.html">сдесь</a><br>
<br>
<a href="https://www.codewars.com/kata/5806c2f897dba05dd900004c">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$vector = [-2, -4, 4];
myDamp($vector);
echo '<b>ответ: </b><br>';
myDamp(Example74::magnitude($vector));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';

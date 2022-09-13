<?

use MyArray\Cate7\Example\Example73;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Является ли каждое значение в массиве массивом?<br>
Это должно проверять только второе измерение массива. Значения вложенных массивов не обязательно должны быть массивами.<br>
Примеры:<br>
[[1], [2]] => true<br>
["1", "2"] => false<br>
[<br>
  new class {<br>
    public $one = 1;<br>
  },<br>
  new class {<br>
    public $two = 2;<br>
  }<br>
] => false<br>
<br>
<a href="https://www.codewars.com/kata/582c81d982a0a65424000201">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$a = [[1], [2], [1]];
myDampPrint($a);
echo '<b>ответ: </b><br>';
myDamp(Example73::arrCheck($a));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';

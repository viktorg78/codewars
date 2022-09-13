<?

use MyArray\Cate7\Example\Example71;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Легкий; Сделать коробку<br>
Учитывая число в качестве параметра (от 2 до 30), вернуть массив, содержащий строки, которые образуют поле.<br><br>
Как это:<br>
n=5<br>
[<br>
  \'-----\',<br>
  \'-   -\',<br>
  \'-   -\',<br>
  \'-   -\',<br>
  \'-----\'<br>
]<br>
<br>
<a href="https://www.codewars.com/kata/58644e8ddf95f81a38001d8d">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$n = 5;
myDamp($n);
echo '<b>ответ: </b><br>';
myDamp(Example71::box($n));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';

<?
use MyArray\Cate6\Example\Example4;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Перевернуть каждое второе слово в заданной строке, а затем вернуть строку.<br>
Отбросьте все начальные или конечные пробелы, убедившись, что между каждым словом есть ровно один пробел.<br>
Знаки препинания следует рассматривать так, как если бы они были частью слова в этой ката.<br>
<br>
<a href="https://www.codewars.com/kata/58d76854024c72c3e20000de">Задача</a>
</div>';
echo '<br>';
$startTime = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$str =  'I really hope it works this time...';
myDamp($str);
echo '<b>ответ: </b><br>';
myDamp(Example4::reverse($str));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $startTime, 4) . ' сек.';



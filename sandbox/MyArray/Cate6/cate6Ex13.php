<?

use MyArray\Cate6\Example\Example13;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!--<p style="color: red">Не решено!!!</p>-->
<p style="color: green; background-color: #D8E8F4; padding: 10px; border-radius: 10px;">Решено!!!</p>
<div>
    <b>Самое результативное слово</b><br/>
    Учитывая строку слов, вам нужно найти слово с наивысшим баллом.<br/><br/>
    Каждая буква слова оценивается в баллах в соответствии с ее положением в алфавите:<code style="background-color: #999999; padding: 5px; border-radius: 10px;">a = 1, b = 2, c = 3</code> и т.д.<br/><br/>
    Например, оценка <code style="background-color: #999999; padding: 5px; border-radius: 10px;">abad</code> равна <code style="background-color: #999999; padding: 5px; border-radius: 10px;">8</code> (1 + 2 + 1 + 4).<br/><br/>
    Вам нужно вернуть слово с наивысшим баллом в виде строки.<br/><br/>
    Если два слова оцениваются одинаково, верните слово, которое появляется первым в исходной строке.<br/><br/>
    Все буквы будут строчными, и все входные данные будут действительными.
    <br><br>
    <a href="https://www.codewars.com/kata/57eb8fcdf670e99d9b000272/train/php">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$string = 'man i need a taxi up to ubud';
myDamp($string);
?>
<br>
<b>ответ: </b><br>
<?

myDamp(Example13::high($string));

?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>

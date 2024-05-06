<?

use MyArray\Example\Example\Ex1;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<div>
    пример array_map
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>пример 1:</b><br>
<?
$users = [
    ['name' => 'Igor', 'age' => 19],
    ['name' => 'Danil', 'age' => 1],
    ['name' => 'Vovan', 'age' => 4],
    ['name' => 'Matvey', 'age' => 16],
];
print_r($users);
?>
<br>
<b>ответ: </b><br>
<?
myDamp(Ex1::ex1($users));
?>
<br>
<br>
<b>пример 2:</b><br>
<?
$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "three", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");
?>
<br>
<?print_r($a);?>
<br>
<?print_r($b);?>
<br>
<?print_r($c);?>
<br><br>
<?
    print_r(Ex1::ex2($a, $b, $c));
?>
<b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.

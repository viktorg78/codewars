<?

use MyArray\Cate6\Example\Example14;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!--<p style="color: red">Не решено!!!</p>-->
<p style="color: green; background-color: #D8E8F4; padding: 10px; border-radius: 10px;">Решено!!!</p>
<div>
    <b>Введение</b><br/>
    Добро пожаловать, авантюрист. Ваша цель - пройти лабиринт и добраться до финиша, не касаясь стен. Это убьет вас
    мгновенно!<br/><br/>
    <b>Задача</b><br/>
    Вам будет предоставлен двумерный массив лабиринта и массив направлений. Ваша задача - следовать данным указаниям.
    Если вы достигли конечной точки до того, как все ваши ходы закончились, вы должны вернуться к <code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">Finish</code>.
    Если вы наткнетесь на какие-либо стены или выйдете за границу лабиринта, вы должны вернуть <code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">Dead</code>.
    Если вы все еще находитесь в лабиринте после использования всех ходов, вы должны вернуть <code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">Lost</code>.
    <br/> <br/>
    Массив лабиринта будет выглядеть так<br>
    <p>
        maze = [[1,1,1,1,1,1,1],<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,0,0,0,0,0,3],<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,0,1,0,1,0,1],<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0,0,1,0,0,0,1],<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,0,1,0,1,0,1],<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,0,0,0,0,0,1],<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,2,1,0,1,0,1]]
    </p>
    ..со следующим ключом <br>
    <p>
        0 = Безопасное место для прогулок<br>
        1 = стена<br>
        2 = Начальная точка<br>
        3 = Финишная точка
    </p>
    <p>
        направление = ["N","N","N","N","N","E","E","E","E","E"] == "Finish"
    </p>
    <b>Правила</b><br>
    1. Массив лабиринта всегда будет квадратным, т.е. <code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">N x N</code>, но его размер и
    содержимое будут меняться от теста к тесту.<br>
    2. В финальных тестах места старта и финиша будут меняться.<br>
    3. Массив направлений всегда будет в верхнем регистре и будет иметь формат N = север, E = восток, W = запад и S =
    ​​юг.<br>
    4. Если вы достигли конечной точки до того, как все ваши ходы закончились, вы должны вернуться к Finish.<br>
    5. Если вы наткнулись на любую стену или вышли за границу лабиринта, вы должны вернуть Dead.<br>
    6. Если вы все еще находитесь в лабиринте после использования всех ходов, вы должны вернуть Потерянный.
    <br><br>
    <a href="https://www.codewars.com/kata/58663693b359c4a6560001d6">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?
$maze = [
    [1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 3],
    [1, 0, 1, 0, 1, 0, 1],
    [0, 0, 1, 0, 0, 0, 1],
    [1, 0, 1, 0, 1, 0, 1],
    [1, 0, 0, 0, 0, 0, 1],
    [1, 2, 1, 0, 1, 0, 1]
];
//$directions = ["N","N","N","N","N","E","E","E","E","E"]; //Finish
//$directions = ["N","N","N","N","N","E","E","S","S","E","E","N","N","E"]; //Finish
//$directions = ["N","N","N","N","N","E","E","E","E","E","W","W"]; //Finish
//$directions = ["N","N","N","W","W"]; //Dead
//$directions = ["N","N","N","N","N","E","E","S","S","S","S","S","S"]; //Dead
$directions = ["N", "E", "E", "E", "E"]; //Lost

myDampLine2($maze, 'Лабиринт');
myDampLine($directions, 'Ключи');
?>
<br>
<b>ответ: </b><br>
<?

myDamp(Example14::maze_runner($maze, $directions));

?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>

<?php

use MyArray\Cate7\Example\Example49;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo '<div>
Благодаря эффекту Эль-Ниньо в этом году мой отпуск с маской и трубкой был похож на пребывание в стиральной машине ... Совсем не весело.<br>
Учитывая строку, состоящую из «~» и «_», представляющих волны и штиль соответственно, ваша задача — проверить, не заболеет ли человек морской болезнью.<br>
Помните, только процесс перехода от волны к затишью добавит эффекта (на самом деле пик волны к впадине, но это сойдет).<br>
Узнайте, сколько изменений уровня имеет строка, и если эта цифра превышает 20% массива, верните «Throw Up», если меньше, верните «No Problem».<br>
<br>
<a href="https://www.codewars.com/kata/57e90bcc97a0592126000064">Задача</a>
</div>';
echo '<br>';
$start = microtime(true);// засекли время на выполнене скрипта
echo '<b>Начало.</b><br>';
$s = '_~~~~~~~_~__~______~~__~~_~~';
myDamp($s);
echo '<b>ответ: </b><br>';
myDamp(Example49::seaSick($s));
echo '<br><b>Конец.</b><br>';
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.';

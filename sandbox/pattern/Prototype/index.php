<?php

use pattern\Prototype\Developer;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн Прототип<br>";

$developer = new Developer();
$developer2 = clone $developer;
$developer2->setName('Борис');
echo $developer2->getName();

echo '<br>конец.';
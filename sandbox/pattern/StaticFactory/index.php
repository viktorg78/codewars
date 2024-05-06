<?php

use pattern\StaticFactory\WorkerFactory;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн Статическая фабрика.<br>";

$developer = WorkerFactory::make('developer');
$designer = WorkerFactory::make('designer');

$developer->work();
$designer->work();

echo '<br>конец.';
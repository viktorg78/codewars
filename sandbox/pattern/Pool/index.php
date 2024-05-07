<?php

use pattern\Pool\WorkersPool;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн Басейн<br>";

$pool = new WorkersPool();
$worker = $pool->getWorker();
$pool->release($worker);

echo '<br>конец.';
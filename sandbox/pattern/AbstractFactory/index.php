<?php

use pattern\AbstractFactory\MakeAuthorsWorker;
use pattern\AbstractFactory\MakeNativeWorker;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн Абстрактная фабрика.<br>";

$nativeDeveloper = MakeNativeWorker::makeDeveloperWorker();
$nativeDesigner = MakeNativeWorker::makeDesignerWorker();
$authorsDeveloper = MakeAuthorsWorker::makeDeveloperWorker();
$authorsDesigner = MakeAuthorsWorker::makeDesignerWorker();

$nativeDeveloper->work();
$nativeDesigner->work();
$authorsDeveloper->work();
$authorsDesigner->work();

echo '<br>конец.';
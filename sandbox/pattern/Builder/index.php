<?php

use pattern\Builder\Operator;
use pattern\Builder\TextBuilder;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo "Патерн Строитель<br>";

$operator = new Operator();
$builder = new TextBuilder();
$builder->make();

$message = $operator->make($builder);
echo  $message->getText();
echo '<br>конец.';

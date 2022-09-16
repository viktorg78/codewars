<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

echo 'Пишем свой DI контейнер' . "<br>";

$di = new \App\Di\Di();
$di->set('classB', function () {
    return new \App\Di\B();
});

$di->set('classB2', function () {
    return new \App\Di\B2();
});

$di->set('classD', function () {
    return new \App\Di\D(['текст 1', 'Текст 2']);
});

new \App\Di\A($di->get('classB'));
echo '<br>';
new \App\Di\A($di->get('classB2'));
echo '<br>';
new \App\Di\A2($di->get('classD'));


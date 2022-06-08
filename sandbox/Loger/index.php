<?
include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');
echo 'Делаем логер';
echo '<br>';
echo 'для примера залогируем созданную мной ошибку';
throw new \Exceptions\MyException('"Это искуственная ошибка');


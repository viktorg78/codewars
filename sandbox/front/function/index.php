<?php
echo 'тест функций';
$str = 'ПриветВасилийПетрович';
echo '<br>';



    $s = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'Э', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'];
    $r = [' а', ' б', ' в', ' г', ' д', ' е', ' ё', ' ж', ' з', ' и', ' й', ' к', ' л', ' м', ' н', ' о', ' п', ' р', ' с', ' т', ' у', ' ф', ' х', ' ц', ' ч', ' ш', ' щ', ' ъ', ' ы', ' ь', ' э', ' ю', ' я'];
   echo $str = str_replace($s,$r, $str);
    $str = str_replace('  ', ' ', $str);
    echo trim($str);


$arr = [1,2,3,4,5,6,7,];

session_start();
$_SESSION["name"] = "Sam";
$_SESSION["age"] = $arr;
echo "Данные сохранены в сессии";
?>
<a href=mas.php>Отправь массив в другую часть сайта или другую страницу</a>
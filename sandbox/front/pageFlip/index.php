<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" href="main.css" rel="stylesheet" media="screen" />
    <title>Переворто страницы</title>
</head>
<body>

<h1>Переворто страницы</h1>

<div id="book">
    <canvas id="pageflip-canvas"></canvas>
    <div id="pages">
        <section>
            <div>
                <h2><a href="http://ruseller.com/lessons.php?rub=37&id=1196">Определение языка средствами PHP</a></h2>
                <p>Я давно искал способ, который позволил бы мне автоматически определять язык страницы для пользователя. Убив на это немало времени, я натолкнулся на следующее решение. Изъятие значения константы HTTP_ACCEPT_LANGUAGE одного из суперглобальных массивов даст то, что нам нужно, а именно строку типа “en-US,en;q=0.8?. Это значение берётся из заголовков запроса страницы.</p>
            </div>
        </section>
        <section>
            <div>
                <h2><a href="http://ruseller.com/lessons.php?rub=2&id=452">8 способов сделать списки привлекательными при помощи стилей</a></h2>
                <p>В этом уроке я покажу вам 8 отличных способов, позволяющих сделать обычные скучные html-списки привлекательными.</p>
            </div>
        </section>
        <section>
            <div>
                <h2><a href="http://ruseller.com/lessons.php?rub=40&id=540">13 полезных SQL запросов для Wordpress</a></h2>
                <p>В сегодняшнем уроке я покажу Вам, как с помощью небольших команд можно внести некоторые изменения.</p>
            </div>
        </section>
        <section>
            <div>
                <h2><a href="http://ruseller.com/lessons.php?rub=33&id=108">Меню для сайта в стиле аккордеона</a></h2>
                <p>В этом уроке мы научимся делать эффект горизонтально раздвигающихся изображений, которые можно использовать или в качестве меню, или просто как небольшую галерею.</p>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript" src="pageflip.js"></script>



</body>
</html>



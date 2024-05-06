<?php

function getLink($url, $data) {
    ksort($data);
    $query = http_build_query($data);
    $signature = MD5($_SESSION['salt'] . $query);
    return $url . '?' . $query . '&sign=' . $signature;
}

function checkSign() {
    $data = $_GET;
    $signQuery = $_GET['sign'];
    unset($data['sign']);
    ksort($data);
    $query = http_build_query($data);
    $signature = MD5($_SESSION['salt'] . $query);
    return $signature === $signQuery;
}
$arrData = ['Арнольд','Арчебальд','sdf'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Песочница</title>
</head>
<body>
<div><h1>Песочница</h1></div>
<a href="<?=getLink('http://test.loc/sandbox/front/sandboxSite/surl.php', $arrData)?>">ссылка</a><br>
<?
 echo getLink('http://test.loc/sandbox/front/sandboxSite/index.php', $arrData);
?>

</body>
</html>

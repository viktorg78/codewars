<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <title>Фронт фото</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 vikHeader1" ></div>
        <div class="col-12 vikHeader" >
            <hr>
        </div>
        <div class="col-12 vikHeader2" >
            <div class="row" style="height: 5rem">
                <div class="col-auto">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="vikDeviz">
                            Сдесь текст для<br>девиза сайта
                        </div>

                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex h-100 justify-content-start align-items-center">
                        <div class="position-relative">
                            <div class="vikLogo1 position-absolute ">
                                <img src="image/1.jpg" class="vikLogo2 position-absolute img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="vikName text-center text-uppercase">
                            Изображая этот мир
                            <div class="position-relative">
                                <div class="position-absolute vikName2">
                                    Банк изображений
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 vikHeader" >
            <hr>
        </div>
        <div class="col-12 vikHeader1" ></div>
    </div>
</div>
<!--блок с меню-->

<nav class="navbar navbar-expand vikNavbar">
    <div class="navbar-nav">
        <a class="nav-item nav-link vikA " href="index.php">
            <div class="vikABlok">
                текущий пункт меню
            </div>
        </a>
        <a class="nav-item nav-link vikA active" href="lk.php">
            <div class="vikABlok">
                Личный кабинет
            </div>
        </a>
        <a class="nav-item nav-link vikA" href="registr.php">
            <div class="vikABlok">
                регистрация
            </div>
        </a>
        <a class="nav-item nav-link vikA" href="autorizacia.php">
            <div class="vikABlok">
                Авторизация
            </div>
        </a>
        <a class="nav-item nav-link vikA" href="listCatalog.php">
            <div class="vikABlok">
                список каталогов
            </div>
        </a>
    </div>
    <form class="d-flex ms-auto me-1">
        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-primary" type="submit">Поиск</button>
    </form>
</nav>
<!--конец меню-->
<!--    хлебные крошки-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 pb-3">
            <div style="color: #B05C5C; font-size: .7vw;">
                <a class="a_bread_crumbs" href="#">Пункт 1</a> <i class="bi bi-caret-right-fill"></i> <a class="a_bread_crumbs" href="#">Пункт 2</a> <i class="bi bi-caret-right-fill"></i> Пункт 3
            </div>
        </div>
    </div>
</div>
<!--    конец хлебные крошки-->
<div class="container-fluid">
    <!--блок с меню в личном кабинете-->

    <nav class="navbar navbar-expand mb-2">
        <div class="navbar-brand ps-5">Мои баллы</div>
        <data class="d-flex ms-auto me-1">
            <a class="nav-item nav-link vikA " href="lk.php">
                <div class="vikABlok">
                    Профиль
                </div>
            </a>
            <a class="nav-item nav-link vikA active" href="ball.php">
                <div class="vikABlok">
                    Баллы
                </div>
            </a>
        </data>
    </nav>
    <!--конец меню в личном кабинете-->
    <div class="row">
        <div class="col-6">
            <div class="mx-2">
                <h2 class="text-center">Баллы</h2>
                <hr>
                10000 бл.
            </div>
        </div>
        <div class="col-6">
            <div class=" mx-2">
                <h2 class="text-center">Описание</h2>
                <hr>
                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
            </div>
        </div>
    </div>
</div>


</body>
</html>



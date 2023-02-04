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
        <a class="nav-item nav-link vikA" href="lk.php">
            <div class="vikABlok">
                Личный кабинет
            </div>
        </a>
        <a class="nav-item nav-link vikA " href="registr.php">
            <div class="vikABlok">
                регистрация
            </div>
        </a>
        <a class="nav-item nav-link vikA" href="autorizacia.php">
            <div class="vikABlok">
                авторизация
            </div>
        </a>
        <a class="nav-item nav-link vikA active" href="listCatalog.php">
            <div class="vikABlok">
                список каталогов
            </div>
        </a>

    </div>
</nav>
<!--конец меню-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            шлебные крошки
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Фото зверюшек</h1>
        </div>
        <div class="col-3 my-1">
            <div class="card start-50 translate-middle-x" style="width: 18rem;">
                <img src="image/1.jpg" class="card-img-top" alt="Название фото">
                <div class="card-body">
                    Название фото
                    <p class="card-text">
                        <i class="bi bi-stars"></i> 10
                        &nbsp;&nbsp;
                        <i class="bi bi-box-arrow-up-right" title="На весь экран" style="cursor: pointer"></i>
                        &nbsp;&nbsp;
                        <i class="bi bi-trash3" style="cursor: pointer" title="Удалить"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 my-1">
            <div class="card start-50 translate-middle-x" style="width: 18rem;">
                <img src="image/1.jpg" class="card-img-top" alt="Название фото">
                <div class="card-body">
                    Название фото
                    <p class="card-text">
                        <i class="bi bi-stars"></i> 10
                        &nbsp;&nbsp;
                        <i class="bi bi-download"></i> 5
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 my-1">
            <div class="card start-50 translate-middle-x" style="width: 18rem;">
                <img src="image/1.jpg" class="card-img-top" alt="Название фото">
                <div class="card-body">
                    Название фото
                    <p class="card-text">
                        <i class="bi bi-stars"></i> 10
                        &nbsp;&nbsp;
                        <i class="bi bi-download"></i> 5
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 my-1">
            <div class="card start-50 translate-middle-x" style="width: 18rem;">
                <img src="image/1.jpg" class="card-img-top" alt="Название фото">
                <div class="card-body">
                    Название фото
                    <p class="card-text">
                        <i class="bi bi-stars"></i> 10
                        &nbsp;&nbsp;
                        <i class="bi bi-download"></i> 5
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 my-1">
            <div class="card start-50 translate-middle-x" style="width: 18rem;">
                <img src="image/1.jpg" class="card-img-top" alt="Название фото">
                <div class="card-body">
                    Название фото
                    <p class="card-text">
                        <i class="bi bi-stars"></i> 10
                        &nbsp;&nbsp;
                        <i class="bi bi-download"></i> 5
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Модальное окно удаление -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Удаление</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                Удалить фото "Название фото"?
            </div>
            <div class="modal-footer">
                <button type="button" class="vikButton2" data-bs-dismiss="modal">Нет</button>
                <button type="button" class="vikButton">Да</button>
            </div>
        </div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




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
<!--    подключаем vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
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
        <div class="navbar-brand ps-5">Мой профиль</div>
        <data class="d-flex ms-auto me-1">
            <a class="nav-item nav-link vikA active" href="lk.php">
                <div class="vikABlok">
                    Профиль
                </div>
            </a>
            <a class="nav-item nav-link vikA " href="ball.php">
                <div class="vikABlok">
                    Баллы
                </div>
            </a>
        </data>
    </nav>
    <!--конец меню в личном кабинете-->
    <div class="row">
        <div class="col-6">
            <div class="container w-75">
                <form>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input form-control is-valid" type="text" id="textLogin" placeholder="">
                            <label class="text-field__label" for="textLogin">Логин:</label>
                            <p>(логин для входа в банк изображений)</p>
                        </div>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input form-control is-invalid" type="text" id="textName" placeholder="">
                            <label class="text-field__label" for="textName">Имя:</label>
                            <p>(имя будут подписыватся ваши работы)</p>
                        </div>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input" type="email" id="textEmail" placeholder="">
                            <label class="text-field__label" for="textEmail">Email:</label>
                            <p>(для связи с вами)</p>
                        </div>
                        <br>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input" type="password" id="textPwd1" placeholder="">
                            <label class="text-field__label" for="textPwd1">Пароль 1:</label>
                            <p>(Для смены пароля)</p>
                        </div>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input" type="password" id="textPwd2" placeholder="">
                            <label class="text-field__label" for="textPwd2">Пароль 2:</label>
                            <p>(Повторите пароль)</p>
                        </div>
                        <button type="submit" class="vikButton">СОХРАНИТЬ</button>
                </form>
            </div>


        </div>
        <div class="col-6">
            <img src="image/1.jpg" class="vikAvatarImg img-fluid w-75"/>
            <p></p>
            <div class="text-field text-field_floating">
                <label class="vikInput-file" id="app">
                    <span class="vikInput-file-text form-control is-invalid" type="text">{{message}}</span>
                    <input type="file" name="file" v-on:change="previewFiles">
                    <span class="VikInput-file-btn">Выберите файл</span>
                </label>
                <p>Ваш аватар</p>
            </div>


        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: null,
        },
        methods: {
            previewFiles(event) {
                console.log(event.target.files[0].name);
                this.message = event.target.files[0].name;
            },
        },
    })
</script>
</body>
</html>


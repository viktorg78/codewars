<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--    <link rel="preconnect" href="https://fonts.gstatic.com">-->
    <!--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">-->
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
        <a class="nav-item nav-link vikA" href="#">
            <div class="vikABlok">
                меню 2
            </div>
        </a>
        <a class="nav-item nav-link vikA" href="#">
            <div class="vikABlok">
                меню 3
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
        <div class="col-6">
            <div class="container w-75">
                <form>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input" type="text" id="textLogin" placeholder="">
                            <label class="text-field__label" for="textLogin">Логин:</label>
                            <p>(логин для входа в банк изображений)</p>
                        </div>
                        <div class="text-field text-field_floating">
                            <input class="text-field__input" type="text" id="textName" placeholder="">
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
        <div class="col-6" style="background-color: aquamarine">
            1111
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


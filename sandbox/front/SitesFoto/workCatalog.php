<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="custom.css">
    <title>Фронт фото</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 vikHeader1"></div>
        <div class="col-12 vikHeader">
            <hr>
        </div>
        <div class="col-12 vikHeader2">
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
        <div class="col-12 vikHeader">
            <hr>
        </div>
        <div class="col-12 vikHeader1"></div>
    </div>
</div>
<!--блок с меню-->
<nav class="navbar navbar-expand vikNavbar">
    <div class="navbar-nav">
        <a class="nav-item nav-link vikA active" href="index.php">
            <div class="vikABlok">
                текущий пункт меню
            </div>
        </a>
        <a class="nav-item nav-link vikA" href="lk.php">
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
                список каталогов пользователя
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
                <a class="a_bread_crumbs" href="#">Пункт 1</a> <i class="bi bi-caret-right-fill"></i> <a
                        class="a_bread_crumbs" href="#">Пункт 2</a> <i class="bi bi-caret-right-fill"></i> Пункт 3
            </div>
        </div>
    </div>
</div>
<!--    конец хлебные крошки-->
<!--фильтр-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <hr>
            <h3>Фильтр</h3>
        </div>

        <div class="col-4">
            <h5>Фон</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    прозрачный фон
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    белый фон
                </label>
            </div>
        </div>
        <div class="col-4">
            <h5>Тип изображения</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Портрет
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Пейзаш
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Натюрморт
                </label>
            </div>
        </div>
        <div class="col-4">
            <h5>Еще тема</h5>
        </div>
        <div class="col-12 text-center">
            <input type="button" value="Применить фильтр" class="btn btn-primary mt-2">
            <hr>
        </div>
    </div>
</div>
<!--конец фильтр-->
<!--    случайные фотки. 12 * 3-->
<div class="row" id="appVue">
    <div class="col-1">
        <div class="position-relative">
            <img src="image/1.jpg" alt="Название" class="img-thumbnail">
            <div class="position-absolute bottom-0 start-0 vikBlur2">
                <!--                        понравилось или не понравилось-->
                <i v-if="star" class="bi bi-star-fill" v-on:click="Star(true)" style="cursor: pointer"></i>
                <i v-else class="bi bi-star" v-on:click="Star(false)" style="cursor: pointer"></i>
            </div>
            <div class="position-absolute bottom-0 end-0 vikBlur">
                <!--                        <i class="bi bi-hand-thumbs-down"></i>-->
                <!--                    <i class="bi bi-hand-thumbs-down-fill"></i>  поставили дизлайк-->
                <i v-if="likeeUp"  class="bi bi-hand-thumbs-up-fill" v-on:click="LikeeUp(true)" style="cursor: pointer"> </i>
                <i  v-else class="bi bi-hand-thumbs-up" v-on:click="LikeeUp(false)" style="cursor: pointer"></i>
                {{likee}}
            </div>
        </div>
    </div>
    <div class="col-1 my-1">
        <img src="image/1.jpg" alt="Название" class="img-thumbnail">
    </div>
    <div class="col-1 my-1">
        <img src="image/1.jpg" alt="Название" class="img-thumbnail">
    </div>
    <div class="col-1 my-1">
        <img src="image/1.jpg" alt="Название" class="img-thumbnail">
    </div>
    <div class="col-1 my-1">
        <img src="image/1.jpg" alt="Название" class="img-thumbnail">
    </div>
    <div class="col-1 my-1">
        <img src="image/1.jpg" alt="Название" class="img-thumbnail">
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    var appVue = new Vue({
        el: '#appVue',
        data: {
            star: false,
            likee: 10,
            likeeUp: false,
        },
        methods: {
            Star: function (event){
                if (event)
                    this.star = false;
                else
                    this.star = true;
            },
            LikeeUp: function (event){
                if(event){
                    this.likee--;
                    this.likeeUp = false
                }
                else {
                    this.likee++;
                    this.likeeUp = true;
                }
            }
        },
    });
</script>

</body>
</html>



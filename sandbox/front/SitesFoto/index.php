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
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

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
        <div class="col-12" style="background-color: #2fc6f7">
            поиск
        </div>
    </div>

<!--    залайканые фото-->
    <div class="row">
        <div class="col-2">
            <div class="card m-1 position-relative">
                <div class="position-relative">
                    <img src="image/1.jpg"  class="card-img-top w-100" alt="Название фото">
                    <div class="position-absolute bottom-0 start-0 vikBlur2 p-1">
<!--                        <i class="bi bi-star-fill"></i> фото понравилось-->
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="position-absolute bottom-0 end-0 p-1 vikBlur">
                        <i class="bi bi-hand-thumbs-down"></i>
<!--                    <i class="bi bi-hand-thumbs-down-fill"></i>  поставили дизлайк-->
                        <i class="bi bi-hand-thumbs-up"></i> 10
<!--                    <i class="bi bi-hand-thumbs-up-fill"></i> поставленный лайк-->

                    </div>
                </div>
                <div class="card-body">
                   <p class="card-text text-center text-truncate" title="Название название название">
                       Название название название
                   </p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card m-1 position-relative">
                <div class="position-relative">
                    <img src="image/1.jpg"  class="card-img-top w-100" alt="Название фото">
                    <div class="position-absolute bottom-0 end-0 p-1 vikBlur">
                        <i class="bi bi-stars"></i> 10
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text text-center text-truncate" title="Название название название">
                        Название название название
                    </p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card m-1 position-relative">
                <div class="position-relative">
                    <img src="image/1.jpg"  class="card-img-top w-100" alt="Название фото">
                    <div class="position-absolute bottom-0 end-0 p-1 vikBlur">
                        <i class="bi bi-stars"></i> 10
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text text-center text-truncate" title="Название название название">
                        Название название название
                    </p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card m-1 position-relative">
                <div class="position-relative">
                    <img src="image/1.jpg"  class="card-img-top w-100" alt="Название фото">
                    <div class="position-absolute bottom-0 end-0 p-1 vikBlur">
                        <i class="bi bi-stars"></i> 10
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text text-center text-truncate" title="Название название название">
                        Название название название
                    </p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card m-1 position-relative">
                <div class="position-relative">
                    <img src="image/1.jpg"  class="card-img-top w-100" alt="Название фото">
                    <div class="position-absolute bottom-0 end-0 p-1 vikBlur">
                        <i class="bi bi-stars"></i> 10
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text text-center text-truncate" title="Название название название">
                        Название название название
                    </p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card m-1 position-relative">
                <div class="position-relative">
                    <img src="image/1.jpg"  class="card-img-top w-100" alt="Название фото">
                    <div class="position-absolute bottom-0 end-0 p-1 vikBlur">
                        <i class="bi bi-stars"></i> 10
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text text-center text-truncate" title="Название название название">
                        Название название название
                    </p>
                </div>
            </div>
        </div>
    </div>
<!--    случайные фотки. 12 * 3-->
   <div class="row">
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
       <div class="col-1 my-1">
           <img src="image/1.jpg" alt="Название" class="img-thumbnail">
       </div>

   </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
</body>
</html>

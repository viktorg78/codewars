<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="custom.css">
    <title>Сайт на весь экран</title>
<!--    <style>-->
<!--        .table {-->
<!--            width: 100%;-->
<!--            margin-bottom: 20px;-->
<!--            border: 1px solid #dddddd;-->
<!--            border-collapse: collapse;-->
<!--        }-->
<!--        .table th {-->
<!--            font-weight: bold;-->
<!--            padding: 5px;-->
<!--            background: #efefef;-->
<!--            border: 1px solid #dddddd;-->
<!--        }-->
<!--        .table td {-->
<!--            border: 1px solid #dddddd;-->
<!--            padding: 5px;-->
<!--        }-->
<!--    </style>-->
</head>
<body>
<!--Это без будстрап-->
<!--<div class="page">-->
<!--    <header class="header"></header>-->
<!--    <main class="content">-->
<!--        <h1 class="title">Заголовок</h1>-->
<!--        <div class="text">-->
<!--            <p>-->
<!--                текст текст текст текст тексттексттексттекст тексттексттекст  тексттексттекст  тексттексттекст-->
<!--                текст текст текст текст тексттексттексттекст тексттексттекст  тексттексттекст  тексттексттекст-->
<!--                текст текст текст текст тексттексттексттекст тексттексттекст  тексттексттекст  тексттексттекст-->
<!--            </p>-->
<!--        </div>-->
<!--    </main>-->
<!--    <footer class="footer"></footer>-->
<!--</div>-->

<!--Это будстрап-->
<div class="container-fluid">
    <div class="row min-vh-100 d-flex flex-column ">
        <div class="col-12 py-4" style="background-color: #00FF00"></div>
        <div class="col-12 mx-auto w-75" style="background-color: #9bc40e">
            <h1 class="title">Заголовок</h1>
            <p>
                текст текст текст текст тексттексттексттекст тексттексттекст  тексттексттекст  тексттексттекст
                текст текст текст текст тексттексттексттекст тексттексттекст  тексттексттекст  тексттексттекст
                текст текст текст текст тексттексттексттекст тексттексттекст  тексттексттекст  тексттексттекст
            </p>
        </div>
        <div style="background-color: #2fc6f7; flex-grow: 1; width: 300px;" id="myDiv">
            <div style="overflow-y: scroll; height: 100px" id="myDiv2">
                dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>
                dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>dddd<br>
            </div>
        </div>
        <div class="col-12 py-4 mt-auto" style="background-color: #00FF00"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
        var myDiv = document.getElementById('myDiv');
        var myDiv2 = document.getElementById('myDiv2');
        var he = myDiv.offsetHeight.toString()+'px';
        myDiv2.style.height = he;
</script>
</body>
</html>

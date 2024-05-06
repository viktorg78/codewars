<?php

use NeuralNetwork\Neuron;
use NeuralNetwork\NeuronNetwork;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

?>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Нейросеть.</title>
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100 d-flex flex-column ">
        <div class="col-12 py-4" style="background-color: #d1d2cb"></div>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://bootstrap-4.ru/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30"
                         height="24" class="d-inline-block align-text-top">
                    Моя нейронная сеть</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Память
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Запомнить состояние</a></li>
                                <li><a class="dropdown-item" href="#">Вспомнить состояние</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Тело документа -->
        <div class="container">
            <form class="was-validated">
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control form-control-sm" placeholder="Первое слогаемое"
                               aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control form-control-sm" placeholder="второе слагаемое"
                               aria-label="Last name">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary btn-sm" value="решить">
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row">
                <?
                $matrixNew = [0 => 0, 1 => 0, 2 => 1, 3 => 0, 4 => 1, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0];
                $weight1 = [1, 2, 3, 2, 3, 5, 0, 5, 0, 0];
                $layer1 = weight($matrixNew,$weight1);
                $weight2 = [0,0,0,0,0,0,0,0,0,0];
                ?>
                <div class="col">

                </div>
            </div>

            <?


//            $layer2 = weight($layer1,$weight2);
//            $weight3 = [1, 2, 3, 4, 5, 5, 0, 0, 1, 0];
            $otv = weight($layer1,$weight2);
            echo '<pre>';
            print_r($matrixNew);
            echo '</pre>';
            echo '<pre>';
            print_r($layer1);
            echo '</pre>';
//            echo '<pre>';
//            print_r($layer2);
//            echo '</pre>';
            echo '<pre>';
            print_r($otv);
            echo '</pre>';
            echo 'ошибки'.'<br>';
            echo '<pre>';
            print_r(errorWeight($otv));
            echo '</pre>';
            for ($i=1; $i < 3; $i++){
                echo '=================<br>';
                $weight2 = errorHandling(errorWeight($otv),$weight2);
                $otv = weight($layer1,$weight2);
                echo '<pre>';
                print_r($otv);
                echo '</pre>';
                echo 'ошибки '.$i.'<br>';
                echo '<pre>';
                print_r($otv);
                echo '</pre>';
            }




            function weight(array $a, array $w):array{
                $x = [];
                $x[0] = $w[0]*$a[0]+$w[1]*$a[0]+$w[2]*$a[0]+$w[3]*$a[0]+$w[4]*$a[0]+$w[5]*$a[0]+$w[6]*$a[0]+$w[7]*$a[0]+$w[8]*$a[0]+$w[9]*$a[0];
                $x[1] = $w[0]*$a[1]+$w[1]*$a[1]+$w[2]*$a[1]+$w[3]*$a[1]+$w[4]*$a[1]+$w[5]*$a[1]+$w[6]*$a[1]+$w[7]*$a[1]+$w[8]*$a[1]+$w[9]*$a[1];
                $x[2] = $w[0]*$a[2]+$w[1]*$a[2]+$w[2]*$a[2]+$w[3]*$a[2]+$w[4]*$a[2]+$w[5]*$a[2]+$w[6]*$a[2]+$w[7]*$a[2]+$w[8]*$a[2]+$w[9]*$a[2];
                $x[3] = $w[0]*$a[3]+$w[1]*$a[3]+$w[2]*$a[3]+$w[3]*$a[3]+$w[4]*$a[3]+$w[5]*$a[3]+$w[6]*$a[3]+$w[7]*$a[3]+$w[8]*$a[3]+$w[9]*$a[3];
                $x[4] = $w[0]*$a[4]+$w[1]*$a[4]+$w[2]*$a[4]+$w[3]*$a[4]+$w[4]*$a[4]+$w[5]*$a[4]+$w[6]*$a[4]+$w[7]*$a[4]+$w[8]*$a[4]+$w[9]*$a[4];
                $x[5] = $w[0]*$a[5]+$w[1]*$a[5]+$w[2]*$a[5]+$w[3]*$a[5]+$w[4]*$a[5]+$w[5]*$a[5]+$w[6]*$a[5]+$w[7]*$a[5]+$w[8]*$a[5]+$w[9]*$a[5];
                $x[6] = $w[0]*$a[6]+$w[1]*$a[6]+$w[2]*$a[6]+$w[3]*$a[6]+$w[4]*$a[6]+$w[5]*$a[6]+$w[6]*$a[6]+$w[7]*$a[6]+$w[8]*$a[6]+$w[9]*$a[6];
                $x[7] = $w[0]*$a[7]+$w[1]*$a[7]+$w[2]*$a[7]+$w[3]*$a[7]+$w[4]*$a[7]+$w[5]*$a[7]+$w[6]*$a[7]+$w[7]*$a[7]+$w[8]*$a[7]+$w[9]*$a[7];
                $x[8] = $w[0]*$a[8]+$w[1]*$a[8]+$w[2]*$a[8]+$w[3]*$a[8]+$w[4]*$a[8]+$w[5]*$a[8]+$w[6]*$a[8]+$w[7]*$a[8]+$w[8]*$a[8]+$w[9]*$a[8];
                $x[9] = $w[0]*$a[9]+$w[1]*$a[9]+$w[2]*$a[9]+$w[3]*$a[9]+$w[4]*$a[9]+$w[5]*$a[9]+$w[6]*$a[9]+$w[7]*$a[9]+$w[8]*$a[9]+$w[9]*$a[9];

                $bas = 0;
                $x[0] = round(Sigmoid($x[0]-$bas),5);
                $x[1] = round(Sigmoid($x[1]-$bas ),5);
                $x[2] = round(Sigmoid($x[2]-$bas),5);
                $x[3] = round(Sigmoid($x[3]-$bas),5);
                $x[4] = round(Sigmoid($x[4]-$bas),5);
                $x[5] = round(Sigmoid($x[5]-$bas),5);
                $x[6] = round(Sigmoid($x[6]-$bas),5);
                $x[7] = round(Sigmoid($x[7]-$bas),5);
                $x[8] = round(Sigmoid($x[8]-$bas),5);
                $x[9] = round(Sigmoid($x[9]-$bas),5);

                return $x;
            }

            function Sigmoid($x){
                return 1/(1+ 1/exp($x));
            }

            function errorWeight($arr){
                $otv = [0,0,0,0,0,0,1,0,0,0];
                $ohib = [];
                $ohib[0] = ($arr[0] - $otv[0]);
                $ohib[1] = ($arr[1] - $otv[1]);
                $ohib[2] = ($arr[2] - $otv[2]);
                $ohib[3] = ($arr[3] - $otv[3]);
                $ohib[4] = ($arr[4] - $otv[4]);
                $ohib[5] = ($arr[5] - $otv[5]);
                $ohib[6] = ($arr[6] - $otv[6]);
                $ohib[7] = ($arr[7] - $otv[7]);
                $ohib[8] = ($arr[8] - $otv[8]);
                $ohib[9] = ($arr[9] - $otv[9]);
                return $ohib;
            }

            function errorHandling($error, $weight){
                $weight1 = [];
                $weight1[0] = $weight[0]-$error[0];
                $weight1[1] = $weight[1]-$error[1];
                $weight1[2] = $weight[2]-$error[2];
                $weight1[3] = $weight[3]-$error[3];
                $weight1[4] = $weight[4]-$error[4];
                $weight1[5] = $weight[5]-$error[5];
                $weight1[6] = $weight[6]-$error[6];
                $weight1[7] = $weight[7]-$error[7];
                $weight1[8] = $weight[8]-$error[8];
                $weight1[9] = $weight[9]-$error[9];
                return $weight1;
            }
            ?>

        </div>


        <!--конец Тело документа -->
        <div class="col-12 py-4 mt-auto" style="background-color: #d1d2cb"></div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</html>

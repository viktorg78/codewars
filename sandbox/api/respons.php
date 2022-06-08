<?php
header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json");


//$requestParams = [];
//$url = $_SERVER['REQUEST_URI'];
//$method =  $_SERVER['REQUEST_METHOD'];
//$requestParams = $_POST['trackingId'];
$respons =   $_POST;
echo json_encode($respons);

<?php

session_start();

if (isset($_SESSION["name"]) && isset($_SESSION["age"]))
{
    $name = $_SESSION["name"];
    $age = $_SESSION["age"];
    echo '<pre>';
    print_r($age);
    echo '</pre>';
}

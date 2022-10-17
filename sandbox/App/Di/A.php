<?php

namespace App\Di;

class A
{

//    это пример работы с di контейнером. В классе А мы получаем данные класса Б не используя жоское связывание


    public function __construct(BInterface $calss)
    {
        echo 'это текста класса А'.'<br>';
        echo $calss->send();
    }
}
<?php

namespace App\Di;

class A
{

//    ��� ������ ������ � di �����������. � ������ � �� �������� ������ ������ � �� ��������� ������ ����������


    public function __construct(BInterface $calss)
    {
        echo '��� ������ ������ �'.'<br>';
        echo $calss->send();
    }
}
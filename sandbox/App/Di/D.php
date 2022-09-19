<?php

namespace App\Di;

use Exception;
use Exceptions\MyException;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

class D implements DInterfase
{
    private $arr = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
    }


    public function send()
    {
        try {
            return $this->arr[0].' '.$this->arr[1];
        }
        catch (Exception $e){
            echo 'Îøèáêà'. $e->getMessage('sssssss');
        }

    }
}
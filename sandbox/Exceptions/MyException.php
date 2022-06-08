<?php

namespace Exceptions;

use Cassandra\Time;
use Loger\CreateLogFile;

class MyException extends \Exception
{
     public function __construct($message, $code = 0, \Throwable $previous = null) {
        $file = new CreateLogFile('MyExeption.txt');
        $file->createFile();
        $time = date('d.m.Y H:i');
        $exepStr = $time.' '. __CLASS__ . ": [$code]: $message";
        $file->setMessage($exepStr);
         parent::__construct($message, $code, $previous);
    }
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
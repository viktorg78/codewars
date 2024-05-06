<?php

namespace MyArray\Example\Example;

class Ex1
{
    public static function ex1($users){
        $names = array_map(fn($user) => $user['name'], $users);
        return $names;
    }
    public static function ex2($a,$b,$c){
        $d = array_map(null, $a, $b, $c);
        return $d;
    }
}
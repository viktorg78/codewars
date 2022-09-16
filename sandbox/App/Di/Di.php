<?php

namespace App\Di;

use Exceptions\MyException;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');

class Di
{
    protected $injections = [];

    /**
     * @param $name
     * @param $definition
     * @return void
     */
    public function set($name, $definition)
    {
        $this->injections[$name] = $definition;
    }

    /**
     * @param $name
     * @return mixed
     * @throws MyException
     */
    public function get($name)
    {
        if (isset($this->injections[$name]))
            $definition = $this->injections[$name];
        else throw new MyException('\''.$name . '\' небыл найден в контейнере зависимостей', 0, null, 'errorDI.log');

        if (is_object($definition))
            return call_user_func($definition);
        else {
            throw new MyException ($name . ' не объект!!!', 1, null, 'errorDI.log');
            return false;
        }
    }

    public function getInjections(){
        return $this->injections;
    }
}
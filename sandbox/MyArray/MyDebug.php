<?php

namespace MyArray;

class MyDebug
{
    /** @var array */
    private $data;

    /**
     * @return array
     */
    function getData()
    {
        return $this->data;
    }

    /**
     * @param $data
     * @return $this
     */
   function setData($data)
    {
         $this->data = $data;
            return $this;
    }

    /**
     * @return void
     */
    function debug(){
        echo '<pre>';
        print_r($this->data);
        echo '</pre>';
    }

}



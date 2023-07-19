<?php

namespace MyArray\Cate6\Example;

use Exception;

class VersionManager
{
    private $x;
    private $xOld = [];

    public function __construct($x = '0.0.1')
    {
        if ($x == "") $x = '0.0.1';
        $path = explode('.', $x);
        if (count($path) >= 3) {
            $this->x[0] = $path[0];
            $this->x[1] = $path[1];
            $this->x[2] = $path[2];
        } elseif (count($path) == 2) {
            $this->x[0] = $path[0];
            $this->x[1] = $path[1];
            $this->x[2] = 0;
        } elseif (count($path) == 1) {
            $this->x[0] = $path[0];
            $this->x[1] = 0;
            $this->x[2] = 0;
        } else {
            $this->x = $x;
        }
        if (!is_numeric($this->x[0]) || !is_numeric($this->x[1]) || !is_numeric($this->x[2]))
            throw new Exception("Error occured while parsing version!");
    }

    public function release()
    {
        return implode('.', $this->x);
    }

    public function major()
    {
        $this->xOld[] = $this->x;
        $this->x[0]++;
        $this->x[1] = 0;
        $this->x[2] = 0;
        return $this;
    }

    public function minor()
    {
        $this->xOld[] = $this->x;
        $this->x[1]++;
        $this->x[2] = 0;
        return $this;
    }

    public function patch()
    {
        $this->xOld[] = $this->x;
        $this->x[2]++;
        return $this;
    }

    public function rollback()
    {
        if ($this->xOld) {
            $rollback = $this->xOld[count($this->xOld) - 1];
            $this->x = $rollback;
            unset($this->xOld[count($this->xOld) - 1]);
            $this->xOld = array_values($this->xOld);
            return $this;
        } else throw new Exception("Cannot rollback!");
    }
}
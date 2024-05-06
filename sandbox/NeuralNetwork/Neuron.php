<?php

namespace NeuralNetwork;

class Neuron
{
    private  $w; //синаптический вес (Память)
    private $x; // Вес нейрона

    public function __construct(float $w = 1)
    {
        $this->w = $w;
        $this->x = rand(0, 100);
    }

    public function getW(){
        return $this->w;
    }

    public function getX(){
        return $this->x;
    }

    public function setW($w){
        $this->w = $w;
    }

    public function setX($x){
        $this->x = $x;
    }

    public function computeX(array $arrX)
    {
       $sum = $this->getX() + array_sum($arrX);
       $this->setX($sum * $this->getW());
    }

    public function printNeuron():string{
        return "W=".$this->w." X=".$this->x;
    }
}
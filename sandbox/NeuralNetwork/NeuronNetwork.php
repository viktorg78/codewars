<?php

namespace NeuralNetwork;

class NeuronNetwork
{
   private $network = [];

   public function create(){

        $this->network = [[1,3],[1,4],[1,4]];
   }

   function getNetwork(){
       return $this->network;
   }
}
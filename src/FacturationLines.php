<?php
namespace MMI;

class FacturationLines{

    private $description;
    private $quantity;
    private $value;
    private $tva;

    public function __construct($description,$quantity,$value,$tva){
        $this->description=$description;
        $this->quantity=$quantity;
        $this->value=$value;
        $this->tva=$tva;
    }
    public function getValue(){
        return $this->value;
    }
     public function getDescription(){
        return $this->description;
    }
     public function getQuantity(){
        return $this->quantity;
    }
     public function getTva(){
        return $this->tva;
    }
}
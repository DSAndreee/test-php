<?php
namespace MMI;

class Facturation{

    private $id;
    private $name;
    private $lines=[];

    public function __construct($id,$name){
        $this->id=$id;
        $this->name=$name;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        
    }
    
    public function getTotal() {
        $total = 0;
      foreach($this->lines as $line){ 
            $total = $total + ($line->getValue()*$line->getQuantity())*(1+$line->getTva()/100);   
        }
        return $total;
    }
    public function addLines($description,$quantity,$value,$tva){
       array_push($this->lines, new FacturationLines($description,$quantity,$value,$tva));
    }
    public function getLines(){
        return $this->lines;
    } 

}
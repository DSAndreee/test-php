<?php
namespace Tests\MMI;

use MMI\Facturation;

class FacturationTest extends \PHPUnit_Framework_TestCase
{
    public function testFacturation(){
        $facture = new Facturation(1,"Test_init");
        $facture->setName("test");
        $facture->setId(2);
        $this->assertEquals($facture->getName(), "test");
        $this->assertEquals($facture->getId(), "2");
    }
   
     public function testTotal(){
        $facture = new Facturation(1,"Boulangerie Bonpain");
        $facture->addLines("Création du site internet",1,438,20);
        $facture->addLines("Formation aux réseaux sociaux",2,140,20);
        $facture->addLines("Refonte graphique + Logo",1,930,20);
        $this->assertEquals($facture->getTotal(), 1977.6);
    }
    public function testAddLines(){
         $facture = new Facturation(1,"Boulangerie Bonpain");
         $facture->addLines("Création du site internet",1,438,20);
         foreach($facture->getLines() as $line){
            $val = $line->getValue();
         }
         $this->assertEquals($val, 438);
    }
   
}
<?php
namespace Tests\MMI;

use MMI\FacturationLines;

class FacturationLinesTest extends \PHPUnit_Framework_TestCase
{
    public function testFacturationLines(){
        $factureLines = new FacturationLines("Description de la ligne",1,910,20);
        $factureLines->setDescription('desc');
        $factureLines->setQuantity(3);
        $factureLines->setValue(999);
        $factureLines->setTva(5);

        $this->assertEquals($factureLines->getDescription(), "desc");
        $this->assertEquals($factureLines->getQuantity(), "3");
        $this->assertEquals($factureLines->getValue(), "999");
        $this->assertEquals($factureLines->getTva(), "5");
    }
   
}
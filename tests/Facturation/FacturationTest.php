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
   
}
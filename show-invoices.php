<?php

require "vendor/autoload.php";

use MMI\Facturation;

$facture = new Facturation(1,"Boulangerie Bonpain");
$facture->addLines("Création du site internet",1,438,20);
$facture->addLines("Formation aux réseaux sociaux",2,140,20);
$facture->addLines("Refonte graphique + Logo",1,930,20);

system('clear');
echo "|_________________________________________________________________________________|"."\n";
echo "|______________________________ Troyes Point Zero ________________________________|"."\n";
echo "|______________________ Votre facture : ".$facture->getName()." ______________________|"."\n";
echo "\n";
echo "|_________________________________________________________________________________|"."\n";
echo "|_______ Description _________________ Prix HT ________ TVA __________ PRIX TTC __|"."\n";
echo "\n";
foreach($facture->getLines() as $line){
echo " —".$line->getDescription()."\t\t".$line->getValue()."€"."\t\t".$line->getTva()."%\t\t".$line->getValue()*(1+$line->getTva()/100)."€ \n";
}
echo "\n";
echo "|________________________________________________________ TOTAL : ".$facture->getTotal()."€ TTC ____|"."\n";
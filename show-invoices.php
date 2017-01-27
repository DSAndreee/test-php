<?php

require "vendor/autoload.php";

use MMI\Facturation;

$entry = new Facturation(1,"Boulangerie Bonpain");
$entry->addLines("Création du site internet",1,438,20);
$entry->addLines("Formation aux réseaux sociaux",2,140,20);
$entry->addLines("Refonte graphique",1,930,20);

echo $entry->getTotal();

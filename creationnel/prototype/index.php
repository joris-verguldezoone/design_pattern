<?php 
require_once('./Pant.php');


$pantalon = new Pant(50);
$clonePantalon = $pantalon->clone();

// Modification du prix via la classe parente
$clonePantalon->setPrix(60);

echo "Prix du pantalon d'origine : " . $pantalon->getPrix();
echo "<br /> Prix du clone du pantalon : " . $clonePantalon->getPrix();

<?php

require_once('./factory/BangladeshiFactory.php');
require_once('./factory/FrenchFactory.php');

$frenchFactory = new FrenchFactory();
$bangladeshiFactory = new BangladeshiFactory();

$frenchPant = $frenchFactory->createPants(
                    'Pantalon Made in France',
                     45,
                    'pantalon.jpg',
                    'Coûte un bras',
                    1); // 1 = origine France

$bangladeshiPant = $bangladeshiFactory->createPants(
                    'Pantalon Made in Bangladesh',
                    45,
                    'pantalon.jpg',
                    'Fast fashion',
                    2); // 2 = origine Bangladesh

echo "Mes factory sont mes dépendances </br >";
echo "J'appel mes sous classes à l'aide de méthodes </br >";
echo "Ces méthodes et sous classes sont rattachées a des interfaces </br >";
echo "Je peux créer des famille d'objets a partir d'abstraction (interfaces)</br >";
echo '</br > My French pant: </br >';

echo $frenchPant->getName(). ' ';
echo $frenchPant->getPrice(). '€ ';
echo $frenchPant->getImage(). ' ';
echo $frenchPant->getDescription(). ' ';
echo $frenchPant->getOrigin(). ' ';

echo '</br >
</br > My bangladeshi pant: </br >';
echo $bangladeshiPant->getName(). ' ';
echo $bangladeshiPant->getPrice(). '€ ';
echo $bangladeshiPant->getImage(). ' ';
echo $bangladeshiPant->getDescription(). ' ';
echo $bangladeshiPant->getOrigin(). ' ';


?>

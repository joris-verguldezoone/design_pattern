<?php

require_once('./User.php');
require_once('./Product.php');
require_once('./PurchaseBuilder.php');
require_once('./Purchase.php');
require_once('./PurchaseHistoryBuilder.php');
require_once('./PurchaseDirector.php');


$purchaseBuilder = new PurchaseBuilder();
$purchaseDirector = new PurchaseDirector($purchaseBuilder);

// Construire un achat spécifique
$purchaseDirector->buildSpecificPurchase();
$specificPurchase = $purchaseBuilder->build();

// Construire un autre achat spécifique
$purchaseDirector->buildAnotherPurchase();
$anotherPurchase = $purchaseBuilder->build();

// Construire l'historique d'achat avec les dates d'achat
$purchaseHistoryBuilder = new PurchaseHistoryBuilder();
// $purchaseHistoryBuilder
//     // ->setPurchaseDate(new DateTime('2022-01-01'))
//     ->setProduct('toto')
//     ->setQuantity(2)
//     ->setTotalPrice(40)
//     ->setCustomerInfo('jojo','hardjojo@yahoo.fr')
//     ->setShippingAddress('134 rue totoj')
//     ->setPurchaseDate(new DateTime('2022-02-01'));

// $purchaseHistory = $purchaseHistoryBuilder->build();


var_dump($specificPurchase);
echo '<br/> plop '. $specificPurchase->getProduct() . '<br/> plop';
echo '<br/> plop '. $specificPurchase->getQuantity() . '<br/> plop';
echo '<br/> plop '. $specificPurchase->getTotalPrice() . '<br/> plop';
// echo '<br/> plop '. $specificPurchase->getCustomerName() . '<br/> plop';
// echo '<br/> plop '. $specificPurchase->getCustomerEmail() . '<br/> plop';
echo '<br/> plop '. $specificPurchase->getShippingAddress() . '<br/> plop';
echo '<br/> plop '. date_format($specificPurchase->getPurchaseDate(), 'dd-mm-yy') . '<br/> plop';
echo '<br/> plop '. $specificPurchase->getCustomerInfo() . '<br/> plop';
var_dump('JOJ LE BEST');
var_dump($anotherPurchase);






// var_dump($purchaseHistory);


?>
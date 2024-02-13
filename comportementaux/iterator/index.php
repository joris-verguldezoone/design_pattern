<?php 

require_once('./ArrayCollection.php');

$collection = new ArrayCollection();
$collection->addItem("Item 1");
$collection->addItem("Item 2");
$collection->addItem("Item 3");


$iterator = $collection->getIterator();
// $iterator = new ArrayIterator([1, 2, 3]);
while ($iterator->valid()) {
    
    echo $iterator->current();
    $currentItem = $iterator->next();
    // echo $currentItem . "\n";

}
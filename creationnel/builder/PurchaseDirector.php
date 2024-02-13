<?php

require_once('IPurchaseHistoryBuilder.php');

class PurchaseDirector 
{

    private $builder;

    public function __construct(IPurchaseHistoryBuilder $builder)
    {
        $this->builder = $builder;
    }

    // Méthode pour construire un achat spécifique
    public function buildSpecificPurchase()
    {
        $this->builder
            ->setProduct('Product A')
            ->setQuantity(2)
            ->setTotalPrice(39.98)
            ->setCustomerInfo('John Doe', 'john.doe@example.com')
            ->setShippingAddress('123 Main St, Cityville')
            ->setPurchaseDate(new DateTime('NOW'));
    }

    // Méthode pour construire un autre achat spécifique
    public function buildAnotherPurchase()
    {
        $this->builder
            ->setProduct('Product B')
            ->setQuantity(1)
            ->setTotalPrice(19.99)
            ->setCustomerInfo('Jane Smith', 'jane.smith@example.com')
            ->setShippingAddress('456 Oak St, Townsville')
            ->setPurchaseDate(new DateTime('NOW'));
    }

}

?>
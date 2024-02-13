<?php
require_once('./IPurchaseHistoryBuilder.php');
require_once('./PurchaseHistory.php');

class PurchaseHistoryBuilder implements IPurchaseHistoryBuilder{
    private $purchaseHistory;

    public function __construct()
    {
        $this->purchaseHistory = new PurchaseHistory();
    }

    public function setProduct(string $product)
    {
        // Non utilisé pour l'historique d'achat
        return $this;
    }

    public function setQuantity(int $quantity)
    {
        // Non utilisé pour l'historique d'achat
        return $this;
    }

    public function setTotalPrice(float $totalPrice)
    {
        // Non utilisé pour l'historique d'achat
        return $this;
    }

    public function setCustomerInfo(string $customerName, string $customerEmail)
    {
        // Non utilisé pour l'historique d'achat
        return $this;
    }

    public function setShippingAddress(string $shippingAddress)
    {
        // Non utilisé pour l'historique d'achat
        return $this;
    }

    public function setPurchaseDate(DateTime $purchaseDate)
    {
        // Utilisé pour enregistrer la date d'achat dans l'historique
        $this->purchaseHistory = $purchaseDate;
        return $this;
    }

    public function build(): IPurchase
    {
 

        return $this->purchaseHistory;
    }
}


?>
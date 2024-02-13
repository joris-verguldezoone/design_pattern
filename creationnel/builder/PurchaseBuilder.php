<?php
require_once('./PurchaseHistoryBuilder.php');
require_once('./Purchase.php');
require_once('./IPurchaseHistoryBuilder.php');


class PurchaseBuilder implements IPurchaseHistoryBuilder
{
    private $purchase;

    public function __construct()
    {
        $this->purchase = new Purchase();
    }

    public function setProduct(string $product)
    {
        $this->purchase->setProduct($product);
        return $this;
    }

    public function setQuantity(int $quantity)
    {
        $this->purchase->setQuantity($quantity);
        return $this;
    }

    public function setTotalPrice(float $totalPrice)
    {
        $this->purchase->setTotalPrice($totalPrice);
        return $this;
    }

    public function setCustomerInfo(string $customerName, string $customerEmail)
    {
        $this->purchase->setCustomerInfo($customerName, $customerEmail);
        return $this;
    }

    public function setShippingAddress(string $shippingAddress)
    {
        $this->purchase->setShippingAddress($shippingAddress);
        return $this;
    }

    public function setPurchaseDate(DateTime $purchaseDate)
    {
        $this->purchase->setPurchaseDate($purchaseDate);
        return $this;
    }

    public function build(): IPurchase
    {
        return $this->purchase;
    }

    

}
?>
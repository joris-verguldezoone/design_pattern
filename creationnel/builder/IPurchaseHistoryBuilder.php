<?php

interface IPurchaseHistoryBuilder
{
    public function setProduct(string $product);
    public function setQuantity(int $quantity);
    public function setTotalPrice(float $totalPrice);
    public function setCustomerInfo(string $customerName, string $customerEmail);
    public function setShippingAddress(string $shippingAddress);
    public function setPurchaseDate(DateTime $purchaseDate);
    public function build(): IPurchase;
}

?>
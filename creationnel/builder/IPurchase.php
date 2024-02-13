<?php

interface IPurchase
{
    public function getProduct(): string;
    public function getQuantity(): int;
    public function getTotalPrice(): float;

    public function getCustomerInfo();
    public function getShippingAddress(): string;

    public function getPurchaseDate(): DateTime;
}

?>
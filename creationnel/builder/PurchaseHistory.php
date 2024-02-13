<?php
require_once('./IPurchase.php');

class PurchaseHistory implements IPurchase{
    private $product;
    private $quantity;
    private $totalPrice;
    private $customerName;
    private $customerEmail;
    private $shippingAddress;
    private $purchaseDate;

    public function __construct(){

    }

    public function getProduct():string
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity():int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of totalPrice
     */ 
    public function getTotalPrice():float
    {
        return $this->totalPrice;
    }

    /**
     * Set the value of totalPrice
     *
     * @return  self
     */ 
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get the value of customerName
     */ 
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set the value of customerName
     *
     * @return  self
     */ 
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get the value of customerEmail
     */ 
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set the value of customerEmail
     *
     * @return  self
     */ 
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get the value of shippingAddress
     */ 
    public function getShippingAddress():string
    {
        return $this->shippingAddress;
    }

    /**
     * Set the value of shippingAddress
     *
     * @return  self
     */ 
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get the value of purchaseDate
     */ 
    public function getPurchaseDate():DateTime
    {
        return $this->purchaseDate;
    }

    /**
     * Set the value of purchaseDate
     *
     * @return  self
     */ 
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    public function getCustomerInfo()
    {

    }

    public function setCustomerInfo(){
        
    }
    
   
}


?>
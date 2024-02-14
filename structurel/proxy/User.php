<?php 

// require_once('./design%20pattern/structurel/Proxy/IUser.php');
require_once('./IUserCache.php');

class User implements IUserCache{

    public function __construct(public $userId)
    {
        
    }

    public function getUserData()
    {
        return "Données de l'utilisateur ". $this->userId;

    }


    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
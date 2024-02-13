<?php 

// require_once('./design%20pattern/structurel/Proxy/IUser.php');
require_once('./IUserCache.php');

class User implements IUserCache{

    public function getUserData()
    {
        return "Données de l'utilisateur";

    }

}
<?php
require_once('./IUser.php');
require_once('./Admin.php');



class AdminFactory implements IUser
{
    const ADMIN_IMAGE = 'admin_image.jpg';
    
    public function __construct()
    {

    }
    public function createUser():User
    {
        return new Admin(5,'admin@mycorp.com',self::ADMIN_IMAGE,'superAdmin');
    }

    public function log($value)
    {
        
    }


   


}

?>
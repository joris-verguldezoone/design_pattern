<?php

require_once('./IUser.php');
require_once('./Guest.php');

class GuestFactory implements IUser
{
    public function __construct()
    {
        $this->createUser();
    }
    public function createUser():User
    {
        $guest = new Guest(6,$this->generateUniqName(),'1234');
        // $guest->setGuestName();
        $this->log($guest);
        return $guest;
    }
    public function log($instance)
    {
        var_dump($instance);
    }
    public function generateUniqName()
    {
        return 'Guest'. uniqid();
    }
}

?>
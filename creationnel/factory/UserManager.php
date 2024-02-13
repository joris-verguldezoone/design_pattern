<?php

require_once('IUser.php');

class UserManager
{
    public function __construct( public IUser $factory)
    {
        $this->factory = $factory;
    } 

    // public function createUser()
    // {
    //     return $this->factory->createUser();
    // }
    public function log($value)
    {
        var_dump($value,$this->factory);
        // return strval($this->factory) . ': hello';
    }
}

?>
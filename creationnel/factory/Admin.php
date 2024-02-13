<?php

class Admin extends User
{
    public function __construct(public ?int $id = null,public ?string $email = 'null',public ?string $password = null, public ?string $role ='superAdmin')
    {
        
    }
    public function sayHello()
    {
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($newEmail)
    {
        $this->email = $newEmail;
        return $this;
    }
}
?>
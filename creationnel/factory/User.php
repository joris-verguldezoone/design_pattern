<?php
class User{
    // id , email, password
    public function __construct(public ?int $id  = null, public ?string $email  = null, public ?string $password = null)
    {

    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($newId)
    {
        $this->id = $newId;
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

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
        return $this;
    }
}
?>


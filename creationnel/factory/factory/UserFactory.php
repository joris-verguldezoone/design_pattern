<?php
require_once('../User');

class UserFactory extends User
{
    public function createUser():User
    {
        return new User();
    }
}

?>
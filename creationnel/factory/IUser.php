<?php

interface IUser
{
    public function createUser():User;
    public function log($value);
}

?>
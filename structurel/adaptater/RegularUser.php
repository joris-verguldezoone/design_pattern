<?php 

require_once('./UserInterface.php');

class RegularUser implements UserInterface {
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function isAdmin() {
        return false;
    }
}
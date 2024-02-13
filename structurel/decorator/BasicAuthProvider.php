<?php 

require_once('./IAuthProvider.php');

class BasicAuthProvider implements IAuthProvider {
    protected $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function authenticate() {
        return "Basic Authenticated User: " . $this->username;
    }
}

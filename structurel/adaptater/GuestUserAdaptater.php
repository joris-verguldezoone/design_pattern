<?php 

require_once('./UserInterface.php');

class GuestUserAdapter implements UserInterface {
    private $guestUser;

    public function __construct($guestUser) {
        $this->guestUser = $guestUser;
    }

    public function getUsername() {
        return "Guest: " . $this->guestUser->getGuestId();
    }

    public function isAdmin() {
        return false;
    }
}
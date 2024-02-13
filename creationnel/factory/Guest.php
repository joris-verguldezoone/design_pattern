<?php
require_once('./User.php');
class Guest extends User
{
    public function __construct(public ?int $id = null,public ?string $guestName = 'null',public ?string $password = null)
    {
        
    }
    public function getGuestName()
    {
        return $this->guestName;
    }
    public function setGuestName($newGuestName)
    {
        $this->guestName = $newGuestName;
        return $this;
    }
}
?>
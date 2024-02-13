<?php 

class UserFlyweight {
    public $postId;
    public $userId;
    public $role;

    public function __construct($postId, $userId, $role) {
        $this->postId = $postId;
        $this->userId = $userId;
        $this->role = $role;
    }
}
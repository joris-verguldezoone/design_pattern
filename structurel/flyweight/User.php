<?php 
class User {
    private $commentId;
    private $text;
    private $userFlyweight;

    public function __construct($commentId, $text, $userFlyweight) {
        $this->commentId = $commentId;
        $this->text = $text;
        $this->userFlyweight = $userFlyweight;
    }

    public function getUserInfo() {
        return "Comment ID: $this->commentId, Text: $this->text, Post ID: {$this->userFlyweight->postId}, User ID: {$this->userFlyweight->userId}, Role: {$this->userFlyweight->role}";
    }
}
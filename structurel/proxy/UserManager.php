<?php 

require_once('./IUserCache.php');

class UserManager {
    public function getUserData(IUserCache $user) {
        return $user->getUserData();
    }
}
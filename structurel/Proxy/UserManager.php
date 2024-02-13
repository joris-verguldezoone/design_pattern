<?php 

require_once('./IUserCache.php');

class UserManager {
    public function getUserData(IUserCache $user) {
        $cachedUser = new UserCache($user);
        return $cachedUser->getUserData();
    }
}
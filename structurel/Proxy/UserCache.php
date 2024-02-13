<?php

require_once('IUserCache');

class UserCache implements IUserCache {
    private $user;
    private $cacheFilePath;

    public function __construct($userId) {
        $this->user = new User($userId);
        $this->cacheFilePath = "cache/user_{$userId}.txt";
    }

    public function getUserData() {
        if (file_exists($this->cacheFilePath)) {
            // Si les données sont en cache, les récupérer depuis le fichier
            return file_get_contents($this->cacheFilePath);
        } else {
            // Si les données ne sont pas en cache, les obtenir depuis l'utilisateur, mettre en cache et renvoyer
            $userData = $this->user->getUserData();
            file_put_contents($this->cacheFilePath, $userData);
            return $userData;
        }
    }
}
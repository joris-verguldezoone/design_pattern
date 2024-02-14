<?php 
require_once('./User.php');
require_once('./UserCache.php');
require_once('./UserManager.php');

$userManager = new UserManager();

$userId = 123; 
$user = new User($userId);

// Obtenir les données de l'utilisateur via le cache
$userData = $userManager->getUserData($user);

// Afficher les données de l'utilisateur
echo $userData;
<?php 

require_once('./TokenAuthentificationHandler.php');
require_once('./FinderprintAuthentificationHandler.php');
require_once('./PasswordAuthentificationHandler.php');

$tokenHandler = new TokenAuthenticationHandler();
$fingerprintHandler = new FingerprintAuthenticationHandler();
$passwordHandler = new PasswordAuthenticationHandler();

$tokenHandler->setNextHandler($fingerprintHandler);
$fingerprintHandler->setNextHandler($passwordHandler);

// La requête d'authentification est initiée par le gestionnaire de token

$_POST['username'] = "toto";
$_POST['password'] = "totoPassword123!";

$userCredentials = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

$tokenHandler->handleRequest($userCredentials);

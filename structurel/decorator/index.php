<?php 

require_once('./BasicAuthProvider.php');
require_once('./ApiDecorator.php');
require_once('./GoogleDecorator.php');
require_once('./FacebookDecorator.php');

$user = new BasicAuthProvider("JohnDoe");

// Authentification Google
$googleAuth = new GoogleAuthDecorator($user);
echo $googleAuth->authenticate() . '</br >';

// Authentification Facebook
$facebookAuth = new FacebookAuthDecorator($user);
echo $facebookAuth->authenticate() . '</br> ';

// Authentification via une API personnalisée
$apiAuth = new ApiAuthDecorator($user, "123456789");
echo $apiAuth->authenticate() . '</br >';

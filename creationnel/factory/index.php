<?php

require_once('./UserManager.php');

require_once('./factory/GuestFactory.php');

require_once('./factory/AdminFactory.php');

echo 'Mes factories sont mes dépendances </br >';
echo "J'utilise le UserManager de manière facultative pour instancier mes Factories </br >";
echo "Mes User utilisent la meme interfaces et sont issu d'un meme type mais sont instancié différemment </br>";

$guestUserManager = new UserManager(new GuestFactory());

$adminUserManager = new UserManager(new AdminFactory());

?>
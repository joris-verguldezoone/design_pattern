<?php 
require_once('./RegularUser.php');
require_once('./AdminUser.php');
require_once('./GuestUserAdaptater.php');


$regularUser = new RegularUser("JohnDoe");
$adminUser = new AdminUser("AdminUser");

// Création d'un utilisateur invité
$guestUser = new class {
    public function getGuestId() {
        return uniqid();
    }
};
// La classe ne fonctionne pas pariel mais a été adapté pour être manipulé tel que 
// les autres Users

// Adaptation de l'utilisateur invité avec l'adaptateur
$guestUserAdapter = new GuestUserAdapter($guestUser);

// Affichage des informations des utilisateurs
echo "</br > Regular User: " . $regularUser->getUsername();
echo "</br > Admin User: " . $adminUser->getUsername();
echo "</br > Guest User: " . $guestUserAdapter->getUsername();

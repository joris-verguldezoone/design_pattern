<?php 

require_once('./UserFactory.php');

$userFactory = new UserFactory();

// Création des objets complets et légers en même temps
$user1 = $userFactory->createCompleteUser(1, "First comment", 123, 456, "Member");
$user2 = $userFactory->createCompleteUser(2, "First comment", 123, 456, "Member");
$user3 = $userFactory->createCompleteUser(3, "First comment", 123, 456, "Member");
$user4 = $userFactory->createCompleteUser(4, "First comment", 123, 456, "Member");
$user5 = $userFactory->createCompleteUser(5, "First comment", 123, 456, "Member");

$user6 = $userFactory->createCompleteUser(6, "Second comment", 123, 789, "Admin");


// var_dump($user1);
echo '</br></br>';
// var_dump($user6);
// var_dump($userFactory->getFlyweights(),('toto'));
foreach($userFactory->getFlyweights() as $flyweight) {
    echo "</br>";
    var_dump($flyweight);
}

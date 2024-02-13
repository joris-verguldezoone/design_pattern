<?php 

$userFactory = new UserFactory();

// Création des objets complets et légers en même temps
$user1 = $userFactory->createCompleteUser(1, "First comment", 123, 456, "Member");
$user2 = $userFactory->createCompleteUser(2, "Second comment", 123, 789, "Admin");

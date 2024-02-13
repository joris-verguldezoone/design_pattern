<?php
class UserFactory {
    private $flyweights = [];

    public function createCompleteUser($commentId, $text, $postId, $userId, $role) {
        foreach ($this->flyweights as $key => $flyweight) {
            // Vérifier si un objet léger existant peut être réutilisé
            if ($postId === $flyweight->postId && $userId === $flyweight->userId && $role === $flyweight->role) {
                return new User($commentId, $text, $flyweight);
            }
        }

        // Création d'un nouvel objet léger si aucun n'a été trouvé
        $userFlyweight = new UserFlyweight($postId, $userId, $role);
        $this->flyweights[uniqid()] = $userFlyweight;

        // Création de l'objet complet en utilisant l'objet léger
        $completeUser = new User($commentId, $text, $userFlyweight);

        return $completeUser;
    }
}

// Utilisation de la factory
$userFactory = new UserFactory();

// Création des objets complets et légers en même temps
$user1 = $userFactory->createCompleteUser(1, "First comment", 123, 456, "Member");
$user2 = $userFactory->createCompleteUser(2, "Second comment", 123, 789, "Admin");

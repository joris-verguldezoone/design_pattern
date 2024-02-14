<?php
require_once('./UserFlyweight.php');
require_once('./User.php');

class UserFactory {
    private $flyweights = [];

    public function createCompleteUser($userId, $text, $postId,$commentId , $role) {
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

    /**
     * Get the value of flyweights
     */ 
    public function getFlyweights()
    {
        return $this->flyweights;
    }

    /**
     * Set the value of flyweights
     *
     * @return  self
     */ 
    public function setFlyweights($flyweights)
    {
        $this->flyweights = $flyweights;

        return $this;
    }
}

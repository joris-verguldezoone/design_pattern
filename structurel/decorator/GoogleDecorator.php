<?php 

require_once('./IAuthProvider.php');

class GoogleAuthDecorator implements IAuthProvider {
    protected $authProvider;

    public function __construct(IAuthProvider $authProvider) {
        $this->authProvider = $authProvider;
    }

    public function authenticate() {
        // ma logique d'implémentation token google etc
        // mais je renvoie un comportement de google (son token)
        return $this->authProvider->authenticate() . " | Google Authenticated";
    }
}
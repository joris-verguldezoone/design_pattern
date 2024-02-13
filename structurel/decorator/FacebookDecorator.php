<?php 

require_once('./IAuthProvider.php');

class FacebookAuthDecorator implements IAuthProvider {
    protected $authProvider;

    public function __construct(IAuthProvider $authProvider) {
        $this->authProvider = $authProvider;
    }

    public function authenticate() {
        // ma logique d'implémentation token facebook etc
        // mais je renvoie un comportement de facebook (son token)
        return $this->authProvider->authenticate() . " | Facebook Authenticated";
    }
}

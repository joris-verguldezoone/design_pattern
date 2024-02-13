<?php 

require_once('./IAuthProvider.php');

class ApiAuthDecorator implements IAuthProvider {
    protected $authProvider;
    protected $apiKey;

    public function __construct(IAuthProvider $authProvider, $apiKey) {
        $this->authProvider = $authProvider;
        $this->apiKey = $apiKey;
    }

    public function authenticate() {
        
        return $this->authProvider->authenticate() . " | API Authenticated with API Key: " . $this->apiKey;
    }
}
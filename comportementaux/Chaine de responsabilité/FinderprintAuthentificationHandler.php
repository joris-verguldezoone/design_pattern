<?php 

require_once('./BaseAuthentificationHandler.php');

class FingerprintAuthenticationHandler extends BaseAuthenticationHandler {
    public function handleRequest($credentials, $updatedResponse = null) {
       
        // logique de handling du fingerprint
        echo 'handling <b>FingerprintAuth</b>, continue </br >';

        parent::handleRequest($credentials, $updatedResponse);
    }
}
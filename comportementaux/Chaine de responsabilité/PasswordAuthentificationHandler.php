<?php 

require_once('./BaseAuthentificationHandler.php');

class PasswordAuthenticationHandler extends BaseAuthenticationHandler {
    public function handleRequest($credentials, $updatedResponse = null) {
        echo 'handling <b>passwordAuth</b>, continue </br >';
       
        parent::handleRequest($credentials, $updatedResponse);
    }
}
<?php 

require_once('./BaseAuthentificationHandler.php');

class TokenAuthenticationHandler extends BaseAuthenticationHandler {
    public function handleRequest($credentials,$updatedResponse = null) {


        echo 'handling <b>tokenAuth</b>, continue </br >';

        parent::handleRequest($credentials, $updatedResponse);
    }
}
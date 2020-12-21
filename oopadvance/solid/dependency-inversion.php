<?php

// dependency inversion principle
interface AuthServiceProviderInterface{
    function authenticate();
}
class Authenticator{
    private $authServiceProvider;

    function __construct(AuthServiceProviderInterface $asp)
    {
        $this->authServiceProvider = $asp;
    }

    function authenticate(){
        $this->asp->authenticate(4);
    }
}


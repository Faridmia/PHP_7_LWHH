<?php 

    // class Authenticator{

    //     function authenticate($username,$password,$external = false,$externalService = false){
    //         if($external == true && $externalService == 'Google'){
    //             $ga = new GoogleAuthenticator();
    //             $ga->authenticate();
    //         }elseif($external == true && 'Github' == $externalService){
    //             $git = new GithubAuthenticator();
    //             $git->authenticate();
    //         }else{
    //             $la = new LocalAuthenticator();
    //             $la->authenticate();
    //         }
    //     }
    // }

    // ai same code vlo kore likhar jonno

    interface AuthServiceProviderInterface{
        function authenticate();
    }

    class GithubAuthenticator implements AuthServiceProviderInterface {
        function authenticate(){
            echo "hello world ";
        }
    }

    class Authenticator{

        private $authServiceProvider;

        function __construct(AuthServiceProviderInterface $authServiceProvider)
        {
            $this->authServiceProvider = $authServiceProvider;
        }

        function authenticate(){
            $this->authServiceProvider->authenticate();
        }
    }

    $ga = new GithubAuthenticator();
    $auth = new Authenticator($ga);
    $auth->authenticate("farid","12345");


?>
<?php
class SessionController {
    private $session;

    public function __construct(){
        $this->session = new UsuarioModel();
    }

    public function login($user, $pass){
        return $this->session->validate_usuario($user, $pass);
    }

    public function logout(){

    }

}
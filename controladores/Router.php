<?php
class Router {
    public $route;

    public function __contruct($route) {

        $session_options = array(
            'use_only_cookies' => 1,
            'auto_start' => 1,
            'read_and_close' => true,
            'lazy_write' => false,
            'cache_limiter' => 'private'
        );

        if ( !isset($_SESSION) )  session_start($session_options);
        
        if( !isset($_SESSION['ok']) )  $_SESSION['ok'] = false;
        
        if($_SESSION['ok']) {
            // Aqui va toda la programacion de la wepapp
        } 
        else {
            // Mostrar un formulario de autenticacion
            $login_form = new ViewController();
            $login_form -> load_view('login');        
        }
        
    }

    // public function __destruct() {
    //     unset($this);
    // }
}
?>
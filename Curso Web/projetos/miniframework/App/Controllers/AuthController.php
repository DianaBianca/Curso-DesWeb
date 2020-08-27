<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


class AuthController extends Action {

    public function autenticar(){
        
        $usuario = Container::getModel('Usuario');

        $usuario->__set('email', $_POST['email']);
        $usuario->__set('senha', $_POST['senha']);

        $retorno = $usuario->autenticar();
        echo '<pre>';
        print_r($retorno);
        echo'</pre>';
    }

}

?>
<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{

    public function servicos(){
        session_start();
        if($_SESSION['id'] != '' && $_SESSION['nome'] != '' ){
            echo 'CHEGUEEEEEEEEEEEI';
            print_r($_SESSION);
        }
        
     }

}


?>
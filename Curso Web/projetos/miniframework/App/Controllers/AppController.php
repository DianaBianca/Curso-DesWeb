<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{

    public function agendamentos(){
        session_start();
        if($_SESSION['id'] != '' && $_SESSION['nome'] != '' ){
            $this->render('agendamentos');
        }else{
            header('Location: /?login=erro');
        }
        
     }

}


?>
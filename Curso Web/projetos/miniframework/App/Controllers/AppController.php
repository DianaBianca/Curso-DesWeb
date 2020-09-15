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

     public function nova_tarefa(){
         $this->render('nova_tarefa');
     }

     public function todas_tarefas(){
        $this->render('todas_tarefas');//VERIFFICAR ESSA LINHA QUE SERÀ RENDERIZADA
    }

    public function agendar(){
       echo "teste";
       #$this->render('nova_tarefa');

    }

}


?>
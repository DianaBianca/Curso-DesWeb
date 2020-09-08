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
        $this->render('todas_tarefas');
    }

    public function agendar(){
        echo "<pre>";
        echo "AAAAAAAAAAAAAAAAAA";
        print_r($_POST);
        echo"</pre>";
        
        $usuario = Container::getModel('Usuario');
        $agendamento = Container::getModel('Agendamentos');

        $agendamento->__set('nome_pet',$_POST['nome_pet']);
        $agendamento->__set('tipo_pet',$_POST['tipo_pet']);
        $agendamento->__set('obs',$_POST['obs']);
        $agendamento->__set('servico',$_POST['servico']);
        $agendamento->__set('plano',$_POST['plano']);
        $agendamento->__set('data',$_POST['data']);
        $agendamento->__set('hora',$_POST['hora']);

        echo "<pre>";
        echo "AAAAAAAAAAAAAAAAAA";
        print_r($_POST);
        echo"</pre>";

    }

}


?>
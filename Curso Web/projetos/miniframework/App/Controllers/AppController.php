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
        $this->render('agendamentos');
    }

    public function agendar(){
       echo '<pre>';
       print_r($_POST);
       echo'</pre>';

       session_start();

       $agendamento = Container::getModel('Agendamentos');
       
       $id_usuario = $_SESSION['id'];

       $agendamento->__set('id_usuario',$id_usuario);
       $agendamento->__set('nome_pet',$_POST['nome_pet']);
       $agendamento->__set('tipo_pet',$_POST['tipo_pet']);
       $agendamento->__set('obs',$_POST['obs']);
       $agendamento->__set('servico',$_POST['servico']);
       $agendamento->__set('plano',$_POST['plano']);
       $agendamento->__set('data',$_POST['data']);
       $agendamento->__set('hora',$_POST['hora']);

       if($_POST['hora'] >= '9:00' && $_POST['hora'] <= '18:00'){
            $agendamento->salvar();
            echo '<pre>';
            print_r($agendamento);
            echo'</pre>';
       }else{
        $this->erroAgendamento = true;
       } 

    }

    public function hora_marcada(){
        echo 'ooooooooooooooooi';

		$hora = Container::getModel('Horarios');

		$horario = hora_marcada();

        $this->view->horario = $horario;
        
        echo '<pre>';
        print_r($horario);
        echo'</pre>';

		$this->render('agendamentos');
		

    }
    

}


?>
<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{

     public function nova_tarefa(){
        session_start();
        if($_SESSION['id'] != '' && $_SESSION['nome'] != '' ){
            $this->render('nova_tarefa');
        }else{
            header('Location: /?login=erro');
        }
         
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
            $this->render('agendamento_concluido');
       }else{
        $this->erroAgendamento = true;
       } 

    }

    public function hora_marcada(){
        
        $hora = Container::getModel('Horarios');
        
        $agenda = $hora->hora_marcada();
        /* MOSTRA NA TELA OS DADOS QUE FORAM PARA O BD
        echo '<pre>';
        foreach ($agenda as $id => $agendados){
            foreach ($agendados as $id2 => $itens){
                print_r($itens);
            }
        }
        echo'</pre>';

	   $this->render('agendamentos',array('k'=>'burro'));
		*/
        
    }
    

}


?>
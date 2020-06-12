<?php
    #print_r($_POST);
    require "tarefa.model.php";
    require "tarefa.service.php";
    require "conexao.php";
    #se houver o indice acao setado no GET, vamos trabalhar com ela, caso contrarioi vamos esperar essa variavel
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    if($acao == 'inserir'){

        $tarefa = new Tarefa();
        $tarefa->__set('tarefa',$_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao,$tarefa);
        $tarefaService->inserir();
        
        header('Location: nova_tarefa.php?inclusao=1');

    }else if($acao == 'recuperar'){

        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao,$tarefa);
        $tarefas = $tarefaService->recuperar();

    }else if($acao == 'atualizar'){

        $tarefa = new Tarefa();
        $tarefa-> __set('id', $_POST['id']);
        $tarefa-> __set('tarefa', $_POST['tarefa']);


        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        if($tarefaService->atualizar()){
            header('location: todas_tarefas.php');
        } 

    }else if($acao == 'remover'){
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->remover();
        if($tarefaService->atualizar()){
            header('location: todas_tarefas.php');
        }
    }




?>
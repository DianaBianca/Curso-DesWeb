<?php
    print_r($_POST);
    require "tarefa.model.php";
    require "tarefa.service.php";
    require "conexao.php";

    

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa',$_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao,$tarefa);
    $tarefaService->inserir();
     
    header('Location: nova_tarefa.php?inclusao=1');
?>
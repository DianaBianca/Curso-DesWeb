<?php
    print_r($_POST);
    require "../../app_lista_tarefas/tarefa.model.php";
    require "../../app_lista_tarefas/tarefa.service.php";
    require "../../app_lista_tarefas/conexao.php";

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa',$_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao,$tarefa);
    $tarefaService->inserir();

?>
<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );
       
        $query   = 'select * from tb_usuario;';

        $stmt    = $conexao->query($query);
        $lista   = $stmt->fetchAll();//retorna todos os registros recuperados da consulta
        print_r($lista);

        echo $lista[0]['nome'];

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();

        //registrar erros
        
    }


?>
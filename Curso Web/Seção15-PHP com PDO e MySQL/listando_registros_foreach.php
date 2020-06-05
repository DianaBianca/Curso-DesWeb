<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );
       
        $query   = '
            select * from tb_usuario ;
        ';
        
        //$stmt      = $conexao->query($query);
        foreach($conexao->query($query) as $key => $value){
            echo $value['nome'];
            echo '<hr>';
        }

        //$lista_usuarios   = $stmt->fetchAll(PDO::FETCH_ASSOC);#fetch retorna um unico registro

        //echo '<pre>';
        //print_r($lista_usuarios);
        //echo '</pre>';

        #echo $usuario->nome;
        #echo $lista_usuarios['nome'];
        /*
        foreach($lista_usuarios as $key => $value){
            echo $value['nome'];
            echo '<hr>';
        }
        */

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();

        //registrar erros
        
    }


?> 
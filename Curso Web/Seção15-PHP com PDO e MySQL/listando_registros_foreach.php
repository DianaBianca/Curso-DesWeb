<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );
       
        $query   = '
            select * from tb_usuario order by nome desc limit 1;
        ';
        
        $stmt      = $conexao->query($query);
        $usuario   = $stmt->fetch(PDO::FETCH_ASSOC);#fetch retorna um unico registro

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

        #echo $usuario->nome;
        echo $usuario['nome'];

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();

        //registrar erros
        
    }


?> 
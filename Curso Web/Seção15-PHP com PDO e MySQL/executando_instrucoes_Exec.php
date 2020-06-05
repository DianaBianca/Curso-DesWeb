<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );

        $query = '
            create table if not exists tb_usuario(
                id    int not null primary key auto_increment,
                nome  varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null

            );
        '

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();

        //registrar erros
        
    }


?>
<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );

        $query = '
            create table if not exists tb_usuario(
                id    int not null primary key auto_increment,
                nome  varchar(50)  not null,
                email varchar(100) not null,
                senha varchar(32)  not null

            );
        ';

        $retorno = $conexao->exec($query);//executa qualquer tipobde query e retorna o num de linhas afetadas
        //0
        //echo $retorno;
        
        $query = '
            insert into tb_usuario(nome, email,senha)
            values ("Joao alberto R", "joaoa123@gmail.com", "123321");
        ';
        $retorno = $conexao->exec($query);
        echo $retorno;
            
        $query = '
            delete from tb_usuario;
        ';
        $retorno = $conexao->exec($query);
        echo $retorno;

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();

        //registrar erros
        
    }


?>
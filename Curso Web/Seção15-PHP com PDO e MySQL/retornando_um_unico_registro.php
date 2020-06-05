<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );
       
        $query   = 'select * from tb_usuario;';

        $stmt    = $conexao->query($query);
        #$lista   = $stmt->fetchAll(PDO::FETCH_ASSOC);//fetch associativo
        #$lista   = $stmt->fetchAll(PDO::FETCH_NUM);
        #$lista   = $stmt->fetchAll(PDO::FETCH_BOTH);
        $lista   = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($lista);
        echo '</pre>';

        #echo $lista[2]->['nome'];

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();

        //registrar erros
        
    }


?> 
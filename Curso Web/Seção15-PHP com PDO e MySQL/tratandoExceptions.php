<?php

    $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha   = '';
    

    try{
        $conexao = new PDO($dsn,$usuario,$senha );

    }catch(PDOException $e){
        echo '<pre>';
        print_r($e);
        echo '</pre>';
    }


?>
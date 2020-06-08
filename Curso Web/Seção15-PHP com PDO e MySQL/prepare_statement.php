<?php
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){

        $dsn     = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha   = '';

        try{
            $conexao = new PDO($dsn,$usuario,$senha );

            $query  = "SELECT * from tb_usuario where";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha ";

            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':usuario',$_POST['usuario']);
            $stmt->bindValue(':senha',$_POST['senha']);//,PDO::PARAM_INT);
            $stmt->execute();

            $usuario = $stmt->fetch();
            print_r($usuario);

        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' Mensagem: '.getMessage();
            
        }
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="prepare_statement.php"> <!--- action é o destino dos dados -->
    
        <input type="text" placeholder="Usuario" name="usuario">
        <br>
        <input type="password" placeholder="Senha" name="senha">
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
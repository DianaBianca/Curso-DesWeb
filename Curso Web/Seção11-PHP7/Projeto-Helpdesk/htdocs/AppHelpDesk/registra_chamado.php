<?php 
	$id_chamado ;
	session_start();
	
	//trabalhando na montagem do texto
	$titulo    = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implode('#',$_POST);

	$texto = $_SESSION['id'].'#'. $titulo .'#'. $categoria .'#'. $descricao .'#'.$id_chamado . PHP_EOL;
	//Abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd','a');

	//escrevendo no arquivo
	fwrite($arquivo, $texto);

	//fechando o arquivo
	fclose($arquivo);
	//echo $texto;
	header('Location: abrir_chamado.php');

 ?>
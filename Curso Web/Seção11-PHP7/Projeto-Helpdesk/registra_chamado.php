<?php 

	//trabalhando na montagem do texto
	$titulo    = str_replace('#', '-', $_POST['titulo']);
	$categoria =str_replace('#', '-', $_POST['categoria']);
	$descricao =str_replace('#', '-', $_POST['descricao']);

	//implode('#',$_POST);

	$texto = $_POST['titulo'] .'#'. $_POST['categoria'] .'#'. $_POST['descricao'] . PHP_EOL;

	//abrindo o arquivo
	$arquivo = fopen('arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);
	//echo $texto;

	header('Location: abrir_chamado.php')

 ?>
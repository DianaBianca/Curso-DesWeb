<?php 
	session_start();

	//remover indices do array de sessao
	//unset($_SESSION['SIM']); //remove indices (se ele existir) de qualquer array

	//destruir a variavel sessao
	//session_destroy()//remove todos os indices da superglobal session

	session_destroy();
	//forçar um redirecionamento
	header('Location: index.php');

?>
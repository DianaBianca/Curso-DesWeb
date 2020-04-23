<?php 
	session_start();

	//variavel que verifica se a autenticação foi realizada
	$user_autenticado = false;

	//usuarios do' sistema
	$usuarios_app = [
		['email' => 'adm@teste.com.br','senha' => '123456'],
		['email' => 'user@teste.com.br','senha' => 'asdf'],
	];
	

	foreach ($usuarios_app as $user) {
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

			$user_autenticado = true;
			
		}
	}

	if ($user_autenticado) {
		echo 'Usuario autenticado';
		$_SESSION['autenticado'] = 'SIM'	;
	}else{
		$_SESSION['autenticado'] = 'NAO'	;
		header('Location: index.php?login=erro');
	}

?>
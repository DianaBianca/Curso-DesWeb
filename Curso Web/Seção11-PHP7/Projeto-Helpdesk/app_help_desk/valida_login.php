<?php 
	session_start();

	//variavel que verifica se a autenticação foi realizada
	$user_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;
	$perfis = [1 => 'Adiministrativo', 2 => 'Usuário'];
	//usuarios do' sistema
	$usuarios_app = [
		['id' => 1,'email' => 'adm@teste.com.br','senha' => '1234', 'perfil_id'=> 1],
		['id' => 2,'email' => 'user@teste.com.br','senha' => '1234','perfil_id'=> 2],
		['id' => 3,'email' => 'jose@teste.com.br','senha' => '1234','perfil_id'=> 2],
		['id' => 4,'email' => 'diana@teste.com.br','senha' => '1234','perfil_id'=> 1],
	];
	

	foreach ($usuarios_app as $user) {
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

			$user_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
			
		}
	}

	if($user_autenticado) {
		echo 'Usuário autencicado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}


?>
<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}


	public function servicos(){
		$this->render('servicos');
	}

	public function cadastro(){
		$this->view->usuario = array(
			'nome' => '',
			'sobrenome' => '',
			'email' => '',
			'senha' => '',
			'senhaconfirmacao' => '',
		);

		$this->view->erroCadastro = false;
		
		$this->render('cadastro');
	}
	public function cadastrar(){
		//receber os dados do formulario
		$usuario = Container::getModel('usuario');

		$usuario-> __set('nome',     $_POST['nome']);
		$usuario-> __set('sobrenome',$_POST['sobrenome']);
		$usuario-> __set('email',    $_POST['email']);
		$usuario-> __set('senha',    $_POST['senha']);
		$usuario-> __set('senhaconfirmacao',$_POST['senhaconfirmacao']);


		if($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0){
			echo "validação ok";
			if ($_POST['senha'] == $_POST['senhaconfirmacao']){
				echo "senhas ok";
				$usuario->salvar();
				$this->render('cadastro_concluido');
			}
		}
		else{
			echo "nao deu hein";
			$this->view->erroCadastro = true;

			$this->render('cadastro');
		}
		
	}

	public function login(){
		$this->render('login');
	}

}


?>
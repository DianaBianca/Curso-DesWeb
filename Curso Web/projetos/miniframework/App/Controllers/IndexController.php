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
		$this->render('cadastro');

		echo '<pre>';
		print_r($_POST);
		echo'</pre>';

		//receber os dados do formulario
		$usuario = Container::getModel('Usuario');
		$usuario-> __set('nome',$_POST['nome']);
		$usuario-> __set('nome',$_POST['sobrenome']);
		$usuario-> __set('nome',$_POST['email']);
		$usuario-> __set('nome',$_POST['senha']);

		echo '<pre>';
		print_r($usuario);
		echo'</pre>';
		//sucesso

		//erro
	}

	public function login(){
		$this->render('login');
	}

}


?>
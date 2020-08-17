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
		//sucesso

		//erro
	}

	public function login(){
		$this->render('login');
	}

}


?>
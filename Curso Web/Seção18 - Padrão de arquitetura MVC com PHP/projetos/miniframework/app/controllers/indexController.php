<?php

namespace app\Controllers;

use MF\Controller\Action;
use app\Connection;
use app\Models\Produto;

class IndexController extends Action {

	public function index() {

		//instÃ¢ncia de conexÃ£o
		$conn = Connection::getDb();

		//instanciar modelo
		$produto = new Produto($conn);

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		
		//$this->view->dados = array('Notebook', 'Smartphone');
		$this->render('sobreNos', 'layout1');
	}

}


?>
<?php

namespace app\Controllers;

use MF\Controller\Action;
use app\Connection;
use app\Models\Produto;
use app\Models\Info;

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
		$conn = Connection::getDb();
		$info = new Info($conn);

		$informacoes = $info->getInfo();

		@$this->view->dados = $informacoes ;
		$this->render('sobreNos', 'layout1');
	}

}


?>
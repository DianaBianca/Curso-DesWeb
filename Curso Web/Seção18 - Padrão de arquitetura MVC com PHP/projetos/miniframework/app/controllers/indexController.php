<?php

namespace app\Controllers;

use MF\Model\Container;
use MF\Controller\Action;

use app\Models\Produto;
use app\Models\Info;

class IndexController extends Action {

	public function index() {

		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		$info = Container::getModel('Info');
		$informacoes = $info->getInfo();

		@$this->view->dados = $informacoes ;
		$this->render('sobreNos', 'layout1');
	}

}


?>
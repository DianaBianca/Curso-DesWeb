<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


//os models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action {

	public function index() {

		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		@$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {

		$info = Container::getModel('Info');

		$informacoes = $info->getInfo();
		
		@$this->view->dados = $informacoes;

		$this->render('sobreNos', 'layout1');
	}

}


?>
<?php

namespace app\controllers;
use MF\Controller\Action;
use app\Connection;
use app\Models\Produto;
class IndexController extends Action{

	public function index() {
		//$this->view->dados = array('x','yyyy','z');
		//instancia de conexao
		$conn = Connection::getDb();

		//instaciar modelo
		$produto = new Produto();

		$produtos = $produto->getProdutos(); 

		$this->view->dados = $produtos;
		$this->render('index','layout1');
	}

	public function sobreNos() {
		//$this->view->dados = array('aaaa','bbbbbb','yyyyyyyyyy');
		$this->render('sobreNos',"layout1");
	}

	
}

?>
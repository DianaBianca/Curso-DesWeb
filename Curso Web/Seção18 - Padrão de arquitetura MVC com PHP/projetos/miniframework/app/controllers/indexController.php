<?php

namespace app\controllers;
use MF\Controller\Action;
class IndexController extends Action{

	public function index() {
		$this->view->dados = array('x','yyyy','z');
		$this->render('index');
	}

	public function sobreNos() {
		$this->view->dados = array('aaaa','bbbbbb','yyyyyyyyyy');
		$this->render('sobreNos');
	}

	
}

?>
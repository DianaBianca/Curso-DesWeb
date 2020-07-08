<?php

namespace app\controllers;

class IndexController {

	public function index() {
		$dados = array('x','yyyy','z');
		$this->render('index',$dados);
	}

	public function sobreNos() {
		$dados = array('aaaa','bbbbbb','yyyyyyyyyy');
		$this->render('sobreNos',$dados);
	}

	public function render($view,$dados){
		//echo get_class($this);//a gente passa uma classe e ele retorna o nome de uma classe
		$classAtual = get_class($this);
		$classAtual = str_replace('app\\controllers\\','',$classAtual);//str_replace(1*'app\\controllers\\',2*'',3*$classAtual)
														  //1* -> o que vc ta procurando na string/2*-> o que vc vai escrever no lugar dela/3* -> variavel onde vc vai procurar
		$classAtual = strtolower(str_replace('Controller','',$classAtual));	

		require_once "../app/Views/".$classAtual."/".$view.".phtml";
	}
}


?>
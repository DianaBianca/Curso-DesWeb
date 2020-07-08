<?php
namespace MF\Controller;

abstract  class Action{
    protected $view;

	public function __construct(){
		$this->view = new \stdClass();//criando objetos vazios
    } 
    
    protected function render($view,$layout){
		$this->view->page = $view;

		if(file_exists("../app/Views/".$layout.".phtml")){
			require_once "../app/Views/".$layout.".phtml";
		}else{
			$this->content();
		}
		
	
	}
	protected function content(){
		//echo get_class($this);//a gente passa uma classe e ele retorna o nome de uma classe
		$classAtual = get_class($this);
		$classAtual = str_replace('app\\controllers\\','',$classAtual);//str_replace(1*'app\\controllers\\',2*'',3*$classAtual)
										  				  //1* -> o que vc ta procurando na string/2*-> o que vc vai escrever no lugar dela/3* -> variavel onde vc vai procurar
		$classAtual = strtolower(str_replace('Controller','',$classAtual));	

		require_once "../app/Views/".$classAtual."/".$this->view->page.".phtml";
	
	}
}


?>
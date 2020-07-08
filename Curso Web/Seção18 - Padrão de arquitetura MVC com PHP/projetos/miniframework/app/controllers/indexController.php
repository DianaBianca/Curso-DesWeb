<?php

namespace app\controllers;

class IndexController {

	public function index() {
		require_once "../app/Views/index/index.phtml";
	}

	public function sobreNos() {
		require_once "../app/Views/index/sobreNos.phtml";
	}
}


?>
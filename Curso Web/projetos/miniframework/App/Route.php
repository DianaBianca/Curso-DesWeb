<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['servicos'] = array(
			'route' => '/servicos',
			'controller' => 'indexController',
			'action' => 'servicos'
		);

		$routes['login']= array(
			'route' => '/login',
			'controller' => 'indexController',
			'action' => 'login'
		);

		$routes['cadastro'] = array(
			'route' => '/cadastro',
			'controller' => 'indexController',
			'action' => 'cadastro'
		);

		$this->setRoutes($routes);
	}

}

?>
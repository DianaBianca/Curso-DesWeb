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

		$this->setRoutes($routes);
	}

}

?>
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

		$routes['login']= array(
			'route' => '/login',
			'controller' => 'indexController', 
			'action' => 'login'
		);

		$routes['inscreverse'] = array(
			'route' => '/inscreverse',
			'controller' => 'indexController',
			'action' => 'inscreverse'
		);

		$routes['registrar'] = array(
			'route' => '/registrar',
			'controller' => 'indexController',
			'action' => 'registrar'
		);

		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);

		$routes['servicos'] = array(
			'route' => '/servicos',
			'controller' => 'indexController',
			'action' => 'servicos'
		);

		$routes['agendamentos'] = array(
			'route' => '/agendamentos',
			'controller' => 'AppController',
			'action' => 'agendamentos'
		);

		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'AuthController',
			'action' => 'sair'
		);

		$routes['todas_tarefas'] = array(
			'route' => '/todas_tarefas',
			'controller' => 'AppController',
			'action' => 'todas_tarefas'
		);
		
		$routes['nova_tarefa'] = array(
			'route' => '/nova_tarefa',
			'controller' => 'AppController',
			'action' => 'nova_tarefa'
		);

		$routes['agendar'] = array(
			'route'=> '/agendar',
			'controller' => 'AppController',
			'action' => 'agendar'
		);


		$routes['hora_marcada'] = array(
			'route' => '/hora_marcada',
			'controller' => 'AppController',
			'action' => 'hora_marcada'
		);
		
		$this->setRoutes($routes);
	}
}
?>
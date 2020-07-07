<?php
namespace app;

class Route{

    private $routes;

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    public function initRoutes(){
        $routes['home']= array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['sobre_nos'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes); //inicialização do array de rotas
    }

    public function run($url){

        echo "*********".$url."**********";
        foreach( $this->getRoutes() as $key => $route){
            print_r($route);
            echo '<br>';
        }

    }

    public function getUrl(){
        #return $_SERVER;//retorna todos os detalhaes do servidor da aplicação
        #return parse_url($_SERVER['REQUEST_URI']);//retorna um array detalhando os componentes da URL
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);//retorna a string relativa ao path

    }
}

?>
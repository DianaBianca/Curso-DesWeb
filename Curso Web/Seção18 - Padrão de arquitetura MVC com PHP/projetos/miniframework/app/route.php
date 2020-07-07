<?php
namespace app;

class Route{
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
    }
    public function getUrl(){
        #return $_SERVER;//retorna todos os detalhaes do servidor da aplicação
        #return parse_url($_SERVER['REQUEST_URI']);//retorna um array detalhando os componentes da URL
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);//retorna a string relativa ao path

    }
}

?>
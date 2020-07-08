<?
    namespace MF\Init;

    abstract class Bootstrap{//nao pode ser instanciada, somente herdada
        private $routes;

        abstract protected function initRoutes();

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

        protected function run($url){

            //echo "*********".$url."**********";
            foreach( $this->getRoutes() as $key => $route){
                    
                if($url == $route['route']){
                    $class = "app\\controllers\\".$route['controller'];//ucfirst($route['controller']);
                        
                    $controller = new $class;
        
                        //actions
                    $action = $route['action'];
        
                    $controller->$action();
                    }
                }
        }

        protected function getUrl(){
            #return $_SERVER;//retorna todos os detalhaes do servidor da aplicação
            #return parse_url($_SERVER['REQUEST_URI']);//retorna um array detalhando os componentes da URL
            return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);//retorna a string relativa ao path
    
        }

    

    }




?>
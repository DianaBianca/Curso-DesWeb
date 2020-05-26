<?php

    class Pai{
        private $nome ='ana';
        protected $sobrenome = 'Rossi';
        public $humor = 'sadboy';

        
        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr,$value){
            $this->attr = $value;
        }
        

        private function executarMania(){
            echo 'assobiar';
        }

        protected function responder(){
            echo 'oi';
        }

        public function executarAcao(){

            $x = rand(1,10);

            if($x >= 1 && $x <=8){
                $this->executarMania();
                echo '<br>';
            }else{ 
                $this->responder();
            }
            
        }
    }

    class Filho extends Pai{
        public function __construct(){
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre> <br>';
        }

        private function executarMania(){
            echo 'cantar';
        }

        public function x(){
            $this->executarMania();
        }
    }


    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre> <br>';

    $filho->executarAcao();
    $filho->x();


    /*
    $pai = new Pai();
    echo $pai->nome;
    echo '<br>';

    $pai->sobrenome  = 'juliana';
    echo $pai->nome;
    
    echo '<br>';
    echo $pai->getNome();

    echo '<br>';
    $pai->setNome('xulianaa');
    echo $pai->getNome();

    
    $pai->humor =  'triste';
    echo '<br>';
    echo $pai->humor;
    */





?>
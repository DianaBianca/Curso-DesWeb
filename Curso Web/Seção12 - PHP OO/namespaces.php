<?php

    namespace A;
    class Cliente implements \B\Cadastro{
        public $nome = 'ana';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            echo 'salvo';
        }

        public function remover(){
            echo 'removido';
        }
    }

    interface Cadastro{
        public function salvar();
    }

    namespace B;
    class Cliente implements \A\Cadastro{
        public $nome = 'felipe';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function remover(){
            echo 'removido';
        }

        public function salvar(){
            echo 'salvo';
        }
    }

    interface Cadastro{
        public function remover();
    }

    //------------------------

    $c = new \A\CLiente();
    print_r($c);
    echo $c-> __get('nome');
/*
    $c = new \B\CLiente();
    print_r($c);
    echo $c-> __get('nome');

*/



?>
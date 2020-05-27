<?php

    namespace A;
    class Cliente implements Cadastro{
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

    


?>
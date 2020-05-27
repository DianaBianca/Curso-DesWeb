<?php   
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


?>
<?php
    namespace APP\Models;

    use MF\Model\Model;

    class Horamarcada extends Model{
        private $id;
        private $id_usuario;
        private $nome_pet;
        private $servico;
        private $plano;
        private $dia;
        
        public function __get($atributo){
            return $atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        //salvar


        //recuperar
        

    }
?>
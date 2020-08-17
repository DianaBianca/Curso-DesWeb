<?php
    namespace APP\Models;

    use MF\Model\Model;

    class Usuario extends Model{

        private $id;
        private $nome;
        private $sobrenome;
        private $email;
        private $senha;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            return $this->$atributo = $valor;
        }

        //salvar

        //validar

        //recuperar




    }


?>
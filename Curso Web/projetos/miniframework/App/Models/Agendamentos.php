<?php
    namespace APP\Models;

    use MF\Model\Model;

    class Agendamentos extends Model{
        private $nome_pet;
        private $id_user;
        private $tipo_pet;
        private $obs;
        private $servico;
        private $plano;
        private $data;
        private $hora;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            return $this->$atributo = $valor;
        }



    } 

?>
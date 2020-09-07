<?php
    namespace APP\Models;

    use MF\Model\Model;

    class Agendamentos extends Model{
        private $nome_pet;
        private $id_usuario;
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

        public function salvar(){
             $query = "insert into agendamentos(id_usuario,nome_pet, tipo_pet, obs, servico, plano,data, hora)
             values (:id_usuario, :nome_pet, :tipo_pet, :obs, :servico, :plano, :data, :hora)";

             $stmt = $this->db->prepare($query);

             

        }




    } 

?>
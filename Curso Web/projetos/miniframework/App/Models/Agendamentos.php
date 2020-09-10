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

             $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
             $stmt->bindValue(':nome_pet', $this->__get('nome_pet'));
             $stmt->bindValue(':tipo_pet', $this->__get('tipo_pet'));
             $stmt->bindValue(':obs', $this->__get('obs'));
             $stmt->bindValue(':servico', $this->__get('servico'));
             $stmt->bindValue(':plano', $this->__get('plano'));
             $stmt->bindValue(':data', $this->__get('data'));
             $stmt->bindValue(':hora', $this->__get('hora'));
            
             $stmt->execute();
             return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        }
    } 

?>
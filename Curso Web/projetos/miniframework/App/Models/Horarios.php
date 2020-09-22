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
        //recuperar
        public function hora_marcada(){
            session_start();
            $query = "
                select 
                    a.nome_pet, 
                    a.servico, 
                    a.plano, 
                    a.data
                from 
                    agendamentos as a
                where 
                    a.id_usuario = :id_usuario
                order by
                    a.data asc
            ";
            
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get($_SESSION['id']));
            $stmt->execute();
    
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    
    }

    }
?>
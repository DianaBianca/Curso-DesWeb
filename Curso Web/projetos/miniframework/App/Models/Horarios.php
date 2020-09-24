<?php
    namespace APP\Models;

    use MF\Model\Model;

    class Horarios extends Model{
        protected $id;
        protected $id_usuario;
        protected $nome_pet;
        protected $servico;
        protected  $plano;
        protected $dia;
        
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
                    nome_pet, 
                    servico, 
                    plano, 
                    data
                from 
                    agendamentos 
                 where 
                    id_usuario = :id_usuario
                order by
                    data asc
            ";
            
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get($_SESSION['id']));
            $stmt->execute();
            $valores = $stmt->fetchAll(\PDO::FETCH_OBJ);
            echo '<pre>';
            print_r($valores);
            echo'</pre>';
            return $valores;
            

           
    }

    }
?>
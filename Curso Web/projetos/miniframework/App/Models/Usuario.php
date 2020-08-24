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

        public function salvar(){
            $query = "insert into usuario(nome,sobrenome,email,senha) values(:nome, :sobrenome, :email, :senha)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':nome',$this->__get('nome'));
            $stmt->bindValue(':sobrenome',$this->__get('sobrenome'));
            $stmt->bindValue(':email',$this->__get('email'));
            $stmt->bindValue(':senha',$this->__get('senha'));
            $stmt->execute();

            return $this;
        }
        //validar
        public function validarCadastro(){
            $valido = true;

            if(strlen($this->__get('nome'))< 3 ){
                $valido = false;
            }

            if(strlen($this->__get('sobrenome'))< 3 ){
                $valido = false;
            }
            if(strlen($this->__get('email'))< 5 ){
                $valido = false;
            }
            if(strlen($this->__get('senha'))< 5 ){
                $valido = false;
            }

            return $valido;
        }
        //recuperar
        public function getUsuarioPorEmail(){
            $query = "select nome, email from usuario where email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email',$this->__get('email'));
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }



    }


?>
<?php
     class Conexao {

        private $host = 'localhost';
        private $dbname = 'bd_app';
        private $user = 'root';
        private $pass = '';


        public function conectar(){
            try{
                $con = new PDO(
                    "mysql:host=$this->host;dbname=$",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;

            }catch(PDOException $e){
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
     }



?>
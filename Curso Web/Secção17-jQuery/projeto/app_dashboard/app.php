<?php

    //classe dashborad
    class Dashboard{
        public $data_inicio;
        public $data_fim;
        public $numeroVendas;
        public $totalVendas;


        public function __get($atributo){
            return $this.atributo;
        }

        public function __set($atributo,$valor){
            $this->$atributo = $valor
            return $this;
        }
    }

    class Conexao{
        private $host = 'localhost';
        private $dbname = 'dashboard';
        private $user = 'root';
        private $pass = '';

        try{

            $conexao = new PDO(
                "mysql:host=$this->host;dbmane=$this->dbname",
                "$this->user",
                "$this->pass"
            );



        }catch(PDOException $e){
            echo '<p>'.$e->getMessage().'</p>';
        }




    }



?>
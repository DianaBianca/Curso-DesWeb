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
            $this->$atributo = $valor;
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

            //instancia da conexao trabalhando com UTF8
            $conexao->exec('set charset set utf8');
            return $conexao;

        }catch(PDOException $e){
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
    //class (model)
    class Bd{

        private $conexao;
        private $dashboard;

        public function __construct(Conexao $conexao, Dashboard $dashboard){
            $this->conexao = $conexao->conectar();
            $this->dashboard = $dashboard;

        }

        $dashboard = new Dashboard();
        $conexao   = new Conexao();

        $bd = new Bd($conexao,$dashboard);


    }



?>
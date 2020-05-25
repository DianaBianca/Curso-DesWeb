<?php

    class Veiculo {
        public $placa = null;
        public $cor   = null;

        function acelerar(){
            echo 'acelerar';
        }

    }

    class Carro extends Veiculo{
        //public $placa = 'ABC123';
        //public $cor  = 'preto';
        public $teto_solar = true;

        function __construct($placa,$cor){
            $this->placa = $placa;
            $this->cor   = $cor;
        }

       /* function acelerar(){
            echo 'acelerar';
        }*/

        function abrirTetoSolar(){
            echo 'abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'alterando posicao do volanrte';
        }


    }

    class Moto extends Veiculo{
       // public $placa = 'yedg323';
       // public $cor = 'preta';
        public $contraPesoGuidao = true;

        function __construct($placa,$cor){
            $this->placa = $placa;
            $this->cor   = $cor;
        }

       /* function acelerar(){
            echo 'Acelerar';
        }*/

        function empinar(){
            echo 'empinando';
        }
    }


    $carro = new Carro('erb13','rosa');
    $moto  = new Moto('hhh231','pink');

    print_r($carro);

    $carro->abrirTetoSolar();
    echo'<br>';
    $carro->acelerar();
    echo'<br>';
    $moto->acelerar();
    echo'<br>';
    $moto->empinar();

?>
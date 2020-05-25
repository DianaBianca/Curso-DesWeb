<?php

    class Veiculo {
        public $placa = null;
        public $cor   = null;

        function acelerar(){
            echo 'acelerar';
        }

        function freiar(){
            echo 'freiando';
        }

        function trocarMarcha(){
            echo 'Desengatar embragem com o pe e engatar marcha com a mao';
        }

    }

    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa,$cor){
            $this->placa = $placa;
            $this->cor   = $cor;
        }

        function abrirTetoSolar(){
            echo 'abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'alterando posicao do volanrte';
        }


    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        function __construct($placa,$cor){
            $this->placa = $placa;
            $this->cor   = $cor;
        }

        function empinar(){
            echo 'empinando';
        }

        function trocarMarcha(){
            echo 'desengatar a marcha com a mao e engatar a marcha com o pé';
        }
    }

    class Caminhao extends Veiculo{

    }


    $carro = new Carro('erb13','rosa');
    $moto  = new Moto('hhh231','pink');
    $caminhao  = new Caminhao();

    print_r($carro);

    $carro->trocarMarcha();
    echo'<br>';
    $carro->acelerar();
    echo'<br>';
    $moto->trocarMarcha();
    echo'<br>';
    $moto->empinar();
    echo'<br>';
    $caminhao->trocarMarcha();
    echo'<br>';

?>
<?php
    interface EquipamentoEletronicoInterface{
        //nao implementa nada da funcao
        public function ligar();

        public function desligar();

    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'abri a porta';
        }
        public function ligar(){
            echo 'geladeira ligada';
        }

        public function desligar(){
            echo 'geladeira desligada';
        }

    }

    class Tv implements EquipamentoEletronicoInterface{
        public function trocarCanal(){
            echo 'tirei da globo';
        }

        public function ligar(){
            echo 'TV ligada';
        }

        public function desligar(){
            echo 'TV desligada';
        }
    }

    $x = new Geladeira();
    $y = new Tv();

    //-----------------------------------------------------------
    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }

    


?>
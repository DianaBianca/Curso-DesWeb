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

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function respirar(){
            echo 'respiração automática : delisgada';
        }

        public function andar(){
            echo 'andando com duas pernas';
        }

        public function conversar(){
            echo 'Tem que ver essa cuestão da emorroida ai filho da puta(bolso,jair)';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo 'respirando ';
        }

        public function nadar(){
            echo 'nadando nadando';
        }

        public function esguichar(){
            echo 'thaaaaaaaaaaaa';
        }
    }


    //---------------------------------
    interface AnimalInterface{
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function comer(){
            echo 'comendo';
        }

        public function voar(){
            echo 'voandoo';
        }
    }


?>
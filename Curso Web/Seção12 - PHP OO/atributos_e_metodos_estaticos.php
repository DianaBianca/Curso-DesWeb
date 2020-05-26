<?php

    class Exemplo{
        public static $atributo1 = 'eu sou estatico';
        public  $atributo2 = 'eu sou normal';

        public static function metodo1(){
            echo 'metodo estatico';
        }

        public function metodo2(){
            echo   'metodo normal';
        }
    }


    $x = new Exemplo();

    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::$medoto1();

    //echo $x->atributo1; -> nao é necessária


?>
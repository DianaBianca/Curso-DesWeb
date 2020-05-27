<?php

    class ExceptionCustomizada extends Exception{
        private $erro = '';
        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagem(){
            return $this->erro;
        }
    }

    try{

        throw new ExceptionCustomizada('erro de teste');

        

    }catch(ExceptionCustomizada $e){
        echo $e->exibirMensagem();
    }


?>
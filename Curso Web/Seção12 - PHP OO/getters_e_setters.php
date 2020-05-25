<?php
    //modelo
    class Funcionario{
        //atributos
        public $nome      = null;
        public $telefone  = null;
        public $numFilhos = null;

        //getters e setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }


        //metodos
        function resumirCadFunc(){
            return "Nome : $this->nome <br> Filhos: $this->numFilhos";
        }

        function modificarNumFilhos($numFilhos){
            //afetear um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $pessoa = new Funcionario();
    $pessoa->setNome('Diana');
    $pessoa->setNumFilhos(2);
    echo $pessoa->getNome() . ' possui ' . $pessoa->getNumFilhos() . ' filhos.';
 

?>
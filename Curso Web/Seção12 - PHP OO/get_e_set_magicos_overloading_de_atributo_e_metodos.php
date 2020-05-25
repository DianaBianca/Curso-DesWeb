<?php
    //modelo
    class Funcionario{
        //atributos
        public $nome      = null;
        public $telefone  = null;
        public $numFilhos = null;
        public $cargo     = null;
        public $salario   = null;

        //getters e setters(overloading/sobrecarregar)

        function __set($atributo,$valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        /*
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
        */

        //metodos
        function resumirCadFunc(){
            return "Nome : $this->nome <br> Filhos: $this->numFilhos <br> Telefone : $this->telefone <br> Cargo : $this->cargo <br> Salário : $this->salario";
        }

        function modificarNumFilhos($numFilhos){
            //afetear um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $pessoa = new Funcionario();
    $pessoa->__set('nome','Diana');
    $pessoa->__set('numFilhos',2);
    $pessoa->__set('telefone', 12312321);
    $pessoa->__set('cargo', 'Desenvolvedora Web');
    $pessoa->__set('salario', 3200);
    echo $pessoa->__get('nome') . ' possui ' . $pessoa->__get('numFilhos') . ' filhos.';
    echo '<br>';
    echo $pessoa->resumirCadFunc();

?>
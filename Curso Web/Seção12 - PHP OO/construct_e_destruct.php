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

        //metodos
        function resumirCadFunc(){
            return 'Nome : ' . $this->__get('nome') . '<br> Filhos: ' . $this->__get('numFilhos') . '<br> Telefone : ' . $this->__get('telefone') . ' <br> Cargo : ' . $this->__get('cargo') . '<br> Salário : '. $this->__get('salario');
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
<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome      = 'Diana';
        public $telefone  = null;
        public $numFilhos = 2;

        //metodos
        function resumirCadFunc(){
            return "$this->nome , voce tem $this->numFilhos filhos. esse é o resumo do cadastro do funcionario";
        }

        function modificarNumFilhos($numFilhos){
            //afetear um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    echo $y-> resumirCadFunc();
    echo '<br>';
    $y->modificarNumFilhos(22);
    
    echo $y-> resumirCadFunc();
    echo '<hr>';

    $x  = new Funcionario();
    echo $x->resumirCadFunc();
    $y->modificarNumFilhos(0);
    echo $x->resumirCadFunc();
?>
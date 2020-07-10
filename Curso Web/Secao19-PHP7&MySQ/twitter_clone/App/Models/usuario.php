<?php
namespaceApp\Models;

use MF\Model\Model;

class Usuario extends Model{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __get($atributo,$valor){
        $this->$atributo = $valor;
    }

    //salvar


    //validar se um cadastro pode ser feito


    //recuperar um usuario por email

}

?>
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

    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    //salvar

    public function salvar(){
        $query = "insert into usuarios(nome, email, senha)values(:nome, :email, :senha);";
        $stmt = $this->db->prepare($query);
        $stmt=bindValue(':nome',$this->__get('nome'));
        $stmt=bindValue(':email',$this->__get('email'));
        $stmt=bindValue(':senha',$this->__get('senha')); //md5()->hash 32 caracteres
        $stmt->execute();

        return $this;
    }
    //validar se um cadastro pode ser feito


    //recuperar um usuario por email

}

?>
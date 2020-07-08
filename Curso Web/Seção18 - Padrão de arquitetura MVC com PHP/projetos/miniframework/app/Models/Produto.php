<?php
namespace app\Models;

class Produro{
    protected $db;

    public function __contruct(PDO $db){
        $this->db = $db;
    }

    public function getProdutos(){
        return  array('mesa','cadeira');
    }
}


?>
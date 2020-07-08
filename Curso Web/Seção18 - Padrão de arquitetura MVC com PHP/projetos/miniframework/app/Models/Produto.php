<?php
namespace app\Models;

class Produro{
    protected $db;

    public function __contruct(\PDO $db){ // a "\" é pra indicar que o PDO está na raiz do php
        $this->db = $db;
    }

    public function getProdutos(){
        $query = "select id,descricao,preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }
}


?>
<?php
namespace app\Models;

class Info{
    protected $db;

    public function __contruct(\PDO $db){ // a "\" é pra indicar que o PDO está na raiz do php
        $this->db = $db;
    }

    public function getInfo(){
        $query = "select titulo,descricao from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}


?>
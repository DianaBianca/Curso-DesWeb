<?php
namespace MF\Model;

abstract class Model{
    protected $db;

    public function __contruct(\PDO $db){ // a "\" é pra indicar que o PDO está na raiz do php
        $this->db = $db;
    }
}



?>
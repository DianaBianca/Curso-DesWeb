<?php
namespace App;

class Connections{
    public static function getDb(){
        try{
            $conn = new PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
            );

            return $conn;
        }catch(PDOException $e){
            echo $e;
        }
    }
}



?>
<?php
namespace MF\Model;
use app\Connection;
class Container{
    public static function getModel($model){

        $class = "\\app\Models\\".ucfirst($model);
        $conn = Connection::getDb();
        return new $class;
    }
}


?>
<?php
    require_once "../vendor/autoload.php";

    $route = new \app\Route;
    echo 'olha o servidor funcionando !';
    echo '<hr>';
    print_r($route->getUrl());
?>
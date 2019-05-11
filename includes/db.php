<?php
    $host = 'localhost';
    $dbName = 'crud';
    $user = 'root';
    $pass = '';
    try {
        $connection = new PDO('mysql:host='.$host.'; dbname='.$dbName.'', $user, $pass);
    }
    catch(PDOException $error) {
        echo 'Uppsss..!'. $error->getMeassage();
        die();
    }
<?php
require 'db.php';

$id = $_GET['id'];


        $sql = 'DELETE FROM persons WHERE id=:id';
        $stmt = $connection->prepare($sql);
        if(
        $stmt->execute([
            ':id' => $id,
        ])) {

            header("Location: ../index.php");
        }
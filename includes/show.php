<?php
    require 'db.php';

        $sql = 'SELECT * FROM persons';
        $statement = $connection->prepare($sql);
        $statement->execute();

        $persons = $statement->fetchAll(PDO::FETCH_OBJ);
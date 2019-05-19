<?php
    require 'db.php';

    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['job']) && isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $job = $_POST['job'];

                if(empty($name) || empty($surname) || empty($job))
                    {

                        header("Location: ../index.php?submit=empty");
                        exit();
                        
                    }else {

                        $sql = 'INSERT INTO persons(name, surname, job) VALUES (:name, :surname, :job)';
                        $stmt = $connection->prepare($sql);
                        $stmt->execute([
                            ':name' => $name,
                            ':surname' => $surname,
                            ':job' => $job
                        ]);
                }

        }
        header("Location: ../index.php");
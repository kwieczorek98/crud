<?php

    require 'db.php';
    require 'header.php';

    $id = $_GET['id'];

    $sql = 'SELECT * FROM persons WHERE id=:id';
    $statement = $connection->prepare($sql);
    $statement->execute([
        ':id' => $id,
    ]);

    $person = $statement->fetch(PDO::FETCH_OBJ);

    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['job']))
        {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $job = $_POST['job'];
            $id_post = $_POST['id'];
            $sqlu = "UPDATE `persons` SET `name` = :name, `surname` = :surname, `job` = :job WHERE `id` = :id";
            $stmt = $connection->prepare($sqlu);
            $stmt->execute([
                    ':name' => $name,
                    ':surname' => $surname,
                    ':job' => $job,
                    ':id' => $id_post,
            ]);
                header("Location: ../index.php");


        }



    ?>
    <h1 class="text-center p-5">Edit data</h1>
    <form class="pb-5" action="edit.php" method="post">
        <div class="container">

                <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter id" value="<?= $person->id?>">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $person->name?>">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname" value="<?= $person->surname?>">
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" class="form-control" id="job" name="job" placeholder="Enter job" value="<?= $person->job?>">
            </div>
            <button type="submit" class="btn btn-info" name="submit">Update</button>
        </div>
    </form>
<?php
    require_once 'footer.php';
?>
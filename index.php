<?php
    require 'includes/header.php';

?>
<body>
    <h1 class="text-center p-5">CRUD | PHP</h1>

                <?php

                if(isset($_GET['submit']) == "emptyname")
                    {
                        $valid = 'is-invalid';
                    }




                ?>

        <form class="pb-5" action="includes/create.php" method="post" name="form">
            <div class="container">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control <?= $valid; ?>" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control <?= $valid; ?>" id="surname" name="surname" placeholder="Enter surname">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" class="form-control <?= $valid; ?>" id="job" name="job" placeholder="Enter job">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Job</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        require 'includes/show.php';

                        foreach($persons as $person):
                    ?>
                        <tr>
                            <th scope="row"><?= $person->id; ?></th>
                            <td><?= $person->name; ?></td>
                            <td><?= $person->surname; ?></td>
                            <td><?= $person->job; ?></td>
                            <td>
                                <a class="btn btn-warning" href="includes/edit.php?id=<?= $person->id ?>">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger text-white" href="includes/delete.php?id=<?= $person->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                        endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php
    require 'includes/footer.php';
?>

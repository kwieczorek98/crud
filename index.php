<?php
    require_once 'includes/header.php';
?>
<body>
    <h1 class="text-center p-5">CRUD | PHP</h1>
        <form class="pb-5" action="includes/create.php" method="post">
            <div class="container">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="Enter job">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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
                        require_once 'includes/show.php';

                        foreach($persons as $person):
                    ?>
                        <tr>
                            <th scope="row"><?= $person->id; ?></th>
                            <td><?= $person->name; ?></td>
                            <td><?= $person->surname; ?></td>
                            <td><?= $person->job; ?></td>
                            <td>
                                <button class="btn btn-warning">Edit</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
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
    require_once 'includes/footer.php';
?>

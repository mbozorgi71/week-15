<?php
  echo "you can confirm new doctor";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<div class="d-flex">
    <h1 class=" text-primary align-items-center justify-content-center"> All doctors</h1>
</div>



<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">family</th>
        <th scope="col">part</th>
    </tr>
    </thead>
    <tbody>
    <tr>

        <?php

        use app\core\Application;
        use app\core\Controller;
        use app\core\Request;


        $db = \app\core\Application::$app->db;

        $db->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $sql = 'select *from  doctor';

        $statement = $db->pdo->prepare($sql);

        $statement->execute();
        $doctor = $statement ->fetchAll();

        //echo "<pre>";
        //print_r($doctor);
        //
        foreach ($doctor as $value)
        {

        ?>



        <th scope="row">
            <?php
            echo  $value["id"];

            ?>
        </th>
        <td>
            <?php
            echo  $value["name"];

            ?>
        </td>
        <td>
            <?php
            echo  $value["family"];

            ?>
        </td>
        <td>
            <?php
            echo   $value["major"];

            ?>
        </td>
    </tr>
    <?php   }
    ?>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>



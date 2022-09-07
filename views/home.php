<h1> Hospital Home Page </h1>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
            integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>



<?php

use app\core\Application;
use app\core\Controller;
use app\core\Request;

if (isset($_POST["searchBTN"])) {

    echo "search result is : <br><br>";

    $db = \app\core\Application::$app->db;

    $db->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $sql = 'select *from  doctor';

    $statement = $db->pdo->prepare($sql);

    $statement->execute();
    $doctor = $statement->fetchAll();

//echo "<pre>";
//print_r($doctor);
//
    $flag = -1;

    foreach ($doctor as $value) {
        if ($_POST["search"] == $value["name"]) {


//            echo $value["name"];
//            echo $value["family"];
//            echo $value["major"];

            echo "<pre>";
            print_r($value);
            $flag=1;
        }
    }

    if($flag<0){
        echo "Doctor not found ";
    }
}


?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>



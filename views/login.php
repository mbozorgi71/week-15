<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div class="m-5 text-primary">

    <h1>login </h1>

    <form action="" method="post">


        <div class="mb-3">
            <label   class="form-label">userName</label>
            <input type="text" class="form-control" id="userName" name="userName"placeholder="enter user name" >
        </div>

        <div class="mb-3">
            <label   class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
        </div>

        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="select">
                <option selected>Open this select menu</option>
                <option value="doctor">doctor</option>
                <option value="Patient">Patient</option>
                <option value="admin">admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary " name="login">login</button>
    </form>

</div>
</body>
</html>

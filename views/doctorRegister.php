<?php
?>
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

    <h1>doctor registeration </h1>
    <h3>You are logged in, but your account is not registered!</h3>
    <h3>please submit your information. </h3>

    <form action="" method="post">

        <div class="mb-3">
            <label   class="form-label">Doctor Code</label>
            <input type="text" class="form-control" id="doctorCode" name="doctorCode" placeholder="enter doctorCode" >

        </div>
        <div class="mb-3">
            <label   class="form-label"> price  </label>
            <input type="text" class="form-control" id="price" name="price" placeholder="enter price" >

        </div>


        <div class="mb-3">
            <label   class="form-label">  phone number </label>
            <input type="text" class="form-control" id="doctorCode" name="phone" placeholder="enter doctorCode" >

        </div>

        <div class="mb-3">
            <label   class="form-label">Doctor part </label>
            <select class="form-select" aria-label="Default select example" name="select">
                <option selected>plese selcet your part acording to your Specialty </option>
                <option value="heart">heart</option>
                <option value="mental ">mental</option>
                <option value="emergency">emergency</option>
                <option value="children ">children</option>
            </select>
        </div>

        <label   class="form-label"> Educational records </label>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder=" enter your Educational records" id="floatingTextarea" name="edu"></textarea>

        </div>

        <label   class="form-label">    social media </label>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder=" enter your social media id " id="social" name="social"></textarea>

        </div>

        <label   class="form-label"> work experience</label>
        <div class="form-floating mb-3">

            <textarea class="form-control" placeholder="enter your work experience" id="floatingTextarea" name="work"></textarea>

        </div>

        <label   class="form-label"> address  </label>
        <div class="form-floating mb-3">

            <textarea class="form-control" placeholder="enter your address" id="floatingTextarea" name="addreess"></textarea>

        </div>

        <label   class="form-label"> Type of Activity </label>
        <div class="form-floating mb-3">

            <textarea class="form-control" placeholder=" enter your Type of Activity" id="floatingTextarea" name="active"></textarea>

        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label">I confirm entered information</label>
        </div>
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
    </form>

</div>
</body>
</html>

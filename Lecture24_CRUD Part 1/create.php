<?php
include 'database.php';

//Check if Add button is clicked
if(isset($_POST['add'])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];

    //Writing insert qeury
    // INSERT INTO users 

    $sql = "INSERT INTO users(first_name, last_name, city) VALUES('$first_name', '$last_name', '$city')";
    $result = $conn->query($sql);

    //Result can only be true or false when we are inserting data

    if($result){
        echo "Data saved Successfully";

        //We will cover this later
        echo "<script> window.location.href='index.php' </script>";

    }




}






?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

        <h1>Create New User</h1>

        <form method="POST">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control"/>

            <br>
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control"/>

            <br>
            <label>City</label>
            <input type="text" name="city" class="form-control"/>

            <input type="submit" name="add" class="btn btn-primary mt-3"/>
        </form>

    </div>




  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
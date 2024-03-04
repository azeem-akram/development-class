<?php
include 'database.php';

$id = $_GET['id'];


$sql = "SELECT * from users where id = $id";

$results = $conn->query($sql);

if($results){
    //Get Associative array from results and store it in varibale $row
    $row = $results->fetch_assoc();
    //var_dump($row);
}



//Check if edit variable is set
if(isset($_POST['edit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];

    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', city = '$city' where id = $id";
    $result = $conn->query($sql);

    if($result){
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

        <h1>Edit User</h1>

        <form method="POST">
            <label>First Name</label>
            <input type="text" value="<?php echo $row['first_name'] ?>" name="first_name" class="form-control"/>

            <br>
            <label>Last Name</label>
            <input type="text" value="<?php echo $row['last_name'] ?>" name="last_name" class="form-control"/>

            <br>
            <label>City</label>
            <input type="text" value="<?php echo $row['city'] ?>" name="city" class="form-control"/>

            <input type="submit" name="edit" class="btn btn-primary mt-3"/>
        </form>

    </div>




  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
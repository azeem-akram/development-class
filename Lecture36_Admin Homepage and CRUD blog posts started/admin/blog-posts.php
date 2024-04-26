<?php
session_start();
include "../database.php";

if(isset($_SESSION['admin_userId'])){
    //echo "Your are logged in";
}
else{
    // If user is not logged in he should be directed to login page and message should be displayed there
    //header("location:index.php");
    $_SESSION['error'] = "You're not logged in, Dont try to be clever";
    echo "<script> window.location.href='/admin/index.php' </script>";
    die;
}


$sql = "Select * from blog_posts";
$results = $conn->query($sql);




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css"/>


    <title>Admin Panel</title>
  </head>
  <body>

    <?php include "includes/sidebar.php" ?>

    <div class="main-container">
        <h1>Admin Panel</h1>

        <div>
            <table class="table table-bordered table-stripped">
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
              </tr>
            <?php 
              if($results->num_rows > 0){
                while($row = $results->fetch_assoc()){
                  ?>
                      <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><img src="/uploads/<?php echo $row['image'] ?>" width="100px"></td>
                        <td><?php echo $row['title'] ?></td>
                        <td>
                          <a class="btn btn-primary">Edit</a>
                          <a class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                  <?php
                }
              }
            ?>
            </table>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
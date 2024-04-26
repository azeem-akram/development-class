<?php
session_start();

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
            <p style="
                padding: 100px;
                text-align: center;
                background-color: aliceblue;
                font-size: x-large;
            ">Blog Post page</p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
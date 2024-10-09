<?php
session_start();
include "../database.php";

//If Admin is not logged in
if(!isset($_SESSION['adminId'])){
  echo "<script> window.location.href='index.php'; </script>";
  die; // Its for security reasons
}

// Denying Access to certain remote addresses
$denyAccess = ["111.111.111", "222.222.222", "333.333.333"];
$current_user_ip = $_SERVER['REMOTE_ADDR'];
for ($i=0; $i < count($denyAccess); $i++) { 
  $add = $denyAccess[$i];
  if ($current_user_ip == $add){
    echo "Your IP address is blocked by the site administrator.";
    die;
  }
}

// Denial of service atacks 


//Get statistics from the database

$sql = "Select * from students";
$results = $conn->query($sql);
$noOfStudents = $results->num_rows;


$sql = "Select * from teachers";
$results = $conn->query($sql);
$noOfTeachers= $results->num_rows;










?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="/admin/assets/css/styles.css" rel="stylesheet" />
    <link href="/admin/assets/css/custom.css" rel="stylesheet" />

    <title>TopTech School Admin</title>
  </head>
  <body>
    
    <header class="bg-dark sb-topnav">
        <img src="/assets/images/logo.png" width="110px"/>

        <a href="/" target="_blank" class="public-website-btn">View Public Website</a>
    </header>


    <div class="main-content">
        <?php include "includes/sidebar.php" ?>
        <div class="content-main p-4">
            <div>
                <h2>Manage Classes</h2>
            </div>
        </div>
    </div>




   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
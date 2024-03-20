<?php
include 'database.php';


$id = $_GET["id"];

$sql = "Select blog_posts.*, categories.name from blog_posts JOIN categories ON type = categories.id WHERE blog_posts.id = $id";
$results = $conn->query($sql);
$row_post = $results->fetch_assoc();



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <?php include "includes/messages.php" ?>

    <div class="container">
        <img class="mt-3" src="/uploads/<?php echo $row_post['image'] ?>" width="100%"/>
        <p class="category mt-2"> <?php echo $row_post['name'] ?> </p>
        <h1><?php echo $row_post['title'] ?></h1>
        <p><?php echo $row_post['content'] ?></p>
    </div>




    <?php include 'includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
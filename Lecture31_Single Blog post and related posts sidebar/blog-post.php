<?php
include 'database.php';

$idd = $_GET['blogId']; 


$query1 = "Select * from blog_posts where id = $idd";
$results1 = $conn->query($query1);

$row1 =  $results1->fetch_assoc();






?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Blog Post</title>
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <?php include "includes/messages.php" ?>


    


    <div class="container mb-5 mt-5">

        <div class="row">
            <!-- Main Content Start -->
            <div class="col-8">
                <img src="/uploads/<?php echo $row1['image']; ?>" width="100%"/>
                <h1><?php echo $row1['title']; ?></h1>
                <div>
                    <?php echo $row1['content'] ?>
                </div>
            </div>

            <!-- Sidebar Start -->
            <div class="col-4">
                <h2>Related Blog </h2>
                <?php
                    $query = "Select * from blog_posts where type = ". $row1['type'];
                    $results = $conn->query($query);

                    if($results){
                        if($results->num_rows > 0){
                          while ($row = $results->fetch_assoc()) {

                            if($row['id'] == $idd){
                                continue;
                            }

                            ?>
                              <div class="mb-3">
                                <a href="blog-post.php?blogId=<?php echo $row['id'] ?>" class="blog-post">
                                    <img src="/uploads/<?php echo $row['image'] ?>" width="100%"/>
                                    <div class="p-3">
                                      <p class="category"> <?php echo $row['name'] ?> </p>
                                      <h3> <?php echo $row['title'] ?> </h3>
                                      <p> <?php echo substr($row['content'], 0, 150) ?>... </p>
                                      <p> <?php echo $row['created_at'] ?> </p>
                                    </div>
                                </a>
                              </div>
                            <?php
                          }
                        }
                      }

                ?>
            </div>
        </div>

        
    </div>







    <?php include 'includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
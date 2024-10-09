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



$sql = "Select * from teachers";
$results = $conn->query($sql);











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
                <h2>Manage Teachers</h2>
            </div>
            <div>
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Mame</th>
                        <th>Email Address</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                    if($results){
                        if($results->num_rows > 0){
                            while($row = $results->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModel_<?php echo $row['id']; ?>">Delete</a>
                                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModel_<?php echo $row['id']; ?>">Edit</a>
                                      

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModel_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteModelLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModelLabel">Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this teacher?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="/admin/handler.php?delete-teacher=1&id=<?php echo $row['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>


                                        <!-- Modal -->
                                        <div class="modal fade" id="editModel_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteModelLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModelLabel">Edit Teacher</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <form action="/admin/handler.php?id=<?php echo $row['id']; ?>" method="POST">
                                            <div class="modal-body">
                                                
                                                    <label>First Name</label>
                                                    <input class="form-control" value="<?php echo $row['first_name'];  ?>" name="first_name" required/>

                                                    <br>
                                                    <label>Last Name</label>
                                                    <input class="form-control" value="<?php echo $row['last_name'];  ?>" name="last_name" required/>

                                                    <br>
                                                    <label>Email Address</label>
                                                    <input class="form-control" value="<?php echo $row['email'];  ?>" name="email" required/>

                                                    <br>
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" name="password"/>


                                                    <br>
                                                    <label>Conform Password</label>
                                                    <input class="form-control" type="password" name="confromPassword"/>



                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="edit-teacher" class="btn btn-danger">Save</button>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>


                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    }
                    
                    ?>

                </table>
            </div>
        </div>
    </div>




   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
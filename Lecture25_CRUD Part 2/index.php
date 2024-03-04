<?php
include 'database.php';


/*
    - CRUD Operations
        - Create - Done
        - Read - Done
        - Update
        - Delete - Done
    
*/





//Adding delete function
if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sqlDelete = "DELETE FROM users where id = $id";
    $resultsDelete = $conn->query($sqlDelete);

    if($resultsDelete){
        echo "Record Deleted Successfully";
    }
}



//Write a query
$sql = "SELECT * from users";
$results = $conn->query($sql);

$rows = $results->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);
die;




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

        <a class="btn btn-success mb-3" href="create.php">Create New User</a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>

            <?php
                //Check if we have results
                if($results){

                    //Check if got some rows
                    if($results->num_rows > 0){

                        //Keep on fetching rows one by one
                        //Store row as assiciative array in $row variable
                        while($row = $results->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['first_name'] ?></td>
                                    <td><?php echo $row['last_name'] ?></td>
                                    <td><?php echo $row['city'] ?></td>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="index.php?delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Delete</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                    else{
                        echo "There is not data in table";
                    }
                }

            ?>


        </table>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
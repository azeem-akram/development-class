<?php
include 'database.php';


//Write a query
$sql = "SELECT * from users where City = 'Seattle'";

$results = $conn->query($sql);

//Check if we have results
if($results){

    //Check if got some rows
    if($results->num_rows > 0){

        //Keep on fetching rows one by one
        //Store row as assiciative array in $row variable
        while($row = $results->fetch_assoc()){
            echo $row['id'] . " " . $row['first_name'] . " " . $row['last_name'] . " " . $row['City'] . " " . $row['created_at'] ;
            echo "<br>";
        }
    }
    else{
        echo "There is not data in table";
    }
}


?>
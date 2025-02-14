<?php
include "models/Task.php";



$hostname = "localhost";
$username = "root";
$pass = "";
$db_name = "task_db";

try {
    $conn = new mysqli($hostname, $username, $pass, $db_name);

    $task = new Task($conn);


} 
catch (\Throwable $th) {
    echo "Connection to the database failed. Message: " . $th->getMessage();
}







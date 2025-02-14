<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$db_name = "task_db";

$conn = new mysqli($hostname, $username, $pass, $db_name);

if($conn->connect_error){
    echo "<h2 style='color:red;'>Connection error</h2>";
}


?>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "mobilo_mart";

$conn = new mysqli($hostname, $username, $password, $dbName);

if($conn->connect_error){
    echo "Connection failed: " . $conn->connect_error;
}


//echo "Success";



?>
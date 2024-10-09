<?php 

$hostname = "localhost";
$username = "root";
$pass = "";
$db_name = "top_tech_school_db";

try {
    $conn = new mysqli($hostname, $username, $pass, $db_name);
} 
catch (\Throwable $th) {
    echo "Connection to the database failed. Message: " . $th->getMessage();
}






?>
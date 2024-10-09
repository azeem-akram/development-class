<?php
session_start();
include "../database.php";
include "../utils.php";



if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Select * from admins where email  = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])){
            $_SESSION['adminId'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];

            echo "<script> window.location.href='dashboard.php'; </script>";
        }
        else{
            echo "Incorrect password";
        }

    }
}




?>
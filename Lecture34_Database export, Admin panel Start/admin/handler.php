<?php
session_start();
include "../database.php";


//If login button is pressed
if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from admin WHERE email = '$email'";
    $results = $conn->query($sql);

    if($results->num_rows > 0){
        $row = $results->fetch_assoc();

        if(password_verify($password, $row['password'])){
            
            $_SESSION['admin_userId'] = $row['id'];
            $_SESSION['admin_email'] = $email;
            $_SESSION['admin_first_name'] = $row['first_name'];
            $_SESSION['admin_last_name'] = $row['last_name'];

            $_SESSION['success'] = "You have been logged in";
            echo "<script> window.location.href='/admin/dashboard.php' </script>";
            die;


        }
        else{
            $_SESSION['error'] = "Incorrect email or password";
            echo "<script> window.location.href='/admin/' </script>";
            die;
        }

    }
    else{
        $_SESSION['error'] = "Incorrect email or password";
        echo "<script> window.location.href='/admin/' </script>";
        die;
    }



}



?>
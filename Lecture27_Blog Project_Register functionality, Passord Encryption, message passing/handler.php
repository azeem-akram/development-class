<?php
session_start();
include 'database.php';

//Getting the data from forms
//validate it
//Store it in database

if(isset($_POST['register'])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    //Validation
    if($password != $password2){
        $_SESSION['error'] = "Password and Confirm password does not match.";
        echo "<script> window.location.href='register.php' </script>";
        die;
    }


    //Validate if password is atleast 6 characters
    if(strlen($password) < 6){
        $_SESSION['error'] = "Password should be atleast 6 characters.";
        echo "<script> window.location.href='register.php' </script>";
        die;
    }



    //Encrypt a users password for security
    $encryped_password =  password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT into users(first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$encryped_password')";
    $results = $conn->query($sql);

    if($results){
        //Send success messsage to user & redirect user to login page
        $_SESSION['success'] = "Your are registered successfully";
        echo "<script> window.location.href='login.php' </script>";
        die;
    }
    else{
        //Send error message to user and redirect back to register page
        $_SESSION['error'] = "Error Occured";
        echo "<script> window.location.href='register.php' </script>";
        die;
    }



    


    





}







?>
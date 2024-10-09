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

//What to do - Delete Teacher
// Which teacher to delete

if(isset($_GET['delete-teacher'])){
    $id = $_GET['id'];

    $sql = "Delete from teachers where id = $id";
    $result = $conn->query($sql);

    if($result){
        echo "<script> window.location.href='teachers.php'; </script>";
    }
    else{
        echo "Error ocured while deleting this teacher";
    }

}


if(isset($_POST['edit-teacher'])){
    $id = $_GET['id'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $password = $_POST['password'];
    $confromPassword = $_POST['confromPassword'];

    if($password != $confromPassword){
        echo 'Passowrd and confirm password does not match';
        die;
    }

    if($password != ""){
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "Update teachers SET first_name = '$first_name', last_name = '$last_name', email = '$email', password = '$encrypted_password' where id = $id";
        $result = $conn->query($sql);

        if($result){
            echo "<script> window.location.href='teachers.php'; </script>";
        }
        else{
            echo "Error ocured while editing this teacher";
        }
    }
    else{
        $sql = "Update teachers SET first_name = '$first_name', last_name = '$last_name', email = '$email' where id = $id";
        $result = $conn->query($sql);

        if($result){
            echo "<script> window.location.href='teachers.php'; </script>";
        }
        else{
            echo "Error ocured while editing this teacher";
        }
    }




}


?>
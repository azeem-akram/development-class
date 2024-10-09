<?php 
session_start();
include "database.php";
include "utils.php";



if(isset($_POST['send-msg-btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];


    $msgBody = "Name: $name <br>Email Address: $email <br>Phone: $phone <br><br>Message: $msg";


    sendEmail('azeemakram1997@gmail.com', $subject, $msgBody);
    ///header("location: success.php");
    echo "<script> window.location.href='success.php'; </script>";
}



//Handle Student Login as well as Teacher Login
if(isset($_POST['login-user']))
{
    $email = $_POST['email'];
    $password= $_POST['password'];


    //First we check if the email exists in teachers table
    $sql = "Select * from teachers where email  = '$email'";
    $result = $conn->query($sql);

    //Checking if some teacher exists with the provided email
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])){
            $_SESSION['teacherId'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];

            echo "<script> window.location.href='teacher/dashboard.php'; </script>";
        }
        else{
            echo "Incorrect Password";
        }

    }
    // IF there is not teacher we check for the student
    else{
        $sql = "Select * from students where email = '$email'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                $_SESSION['studentId'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                echo "<script> window.location.href='student/dashboard.php'; </script>";
            }
            else{
                echo "Incorrect Password";
            }
        }
        else{
            echo "There is no user with this email";
        }

    }







}







?>
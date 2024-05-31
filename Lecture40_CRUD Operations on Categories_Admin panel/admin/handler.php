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




if(isset($_POST['add-new-post'])){

    $imgFile = $_FILES['img'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];


    // Step 1: Upload the file in uploads folder
    $path = "../uploads/";

    $tempName = $imgFile['tmp_name'];
    $actualName =  $imgFile['name'];

    if(move_uploaded_file($tempName, $path . $actualName)){
        $_SESSION['success'] = "Thumbnail uploaded";
    }
    else{
        $_SESSION['error'] = "Error occured while uploading img, Please try again with different Image";
    }





    // Step 2: Save the file name with other data(title, content, category) in database table

    $sql = "INSERT into blog_posts (title, image, content, type) VALUES('$title', '$actualName', '$content', '$category')";

    $results = $conn->query($sql);

    if($results){
        $_SESSION['success'] = "Blog uploaded successfully";
        echo "<script> window.location.href='/admin/blog-posts.php' </script>";

    }
    else{
        $_SESSION['error'] = "Error Occured while saving blog, Please try again";
    }



    echo "<script> window.location.href='/admin/blog-posts.php' </script>";





}



if(isset($_POST['edit-blog-post'])){
    $id = $_GET['id'];

    echo "<h1>Editing blog post with ID $id</h1>" ;

    var_dump($_POST);

    // Check if user submitted the image, if that is the case, upload the image
    // otherwise, save just the title, content and category in the database row with id = $id 
    // Use UPDATE query

}




if(isset($_POST['delete-blog-post'])){
    $id = $_GET['id'];
    echo "<h1>Deleting blog post...$id</h1>";

    $sql = "DELETE from blog_posts where id = $id";
    $results = $conn->query($sql);

    if($results){
        $_SESSION['success'] = "Blog Deleted successfully";
    }
    else{
        $_SESSION['error'] = "Error Occured while deleting blog post";
    }

    echo "<script> window.location.href='/admin/blog-posts.php' </script>";
}



if(isset($_POST['add-new-category'])){
    $name = $_POST['name'];

    $sql = "INSERT into categories(name) VALUES('$name')";
    $results = $conn->query($sql);

    if($results){
        $_SESSION['success'] = "Category added successfully";
    }
    else{
        $_SESSION['error'] = "Error Occured while adding category";
    }

    echo "<script> window.location.href='/admin/categories.php' </script>";

}




if(isset($_POST['edit-category'])){

    $id = $_GET['id'];
    $name = $_POST['name'];

    $sql = "UPDATE categories SET name = '$name' where id = $id";
    $results = $conn->query($sql);

    if($results){
        $_SESSION['success'] = "Category updated successfully";
    }
    else{
        $_SESSION['error'] = "Error Occured while updating category";
    }

    echo "<script> window.location.href='/admin/categories.php' </script>";


}


if(isset($_POST['delete-category'])){
    $id = $_GET['id'];

    $sql = "DELETE from categories where id = $id";

    $results = $conn->query($sql);

    if($results){
        $_SESSION['success'] = "Category Deleted successfully";
    }
    else{
        $_SESSION['error'] = "Error Occured while deleting category";
    }

    echo "<script> window.location.href='/admin/categories.php' </script>";
}



?>
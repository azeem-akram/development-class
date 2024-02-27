<?php

# Bootstrap Grid System
# PHP cookies
# - Cookies are small storage provided to each website by the browser
# - Websites use these cookies to store data about user activity, like his searches, likes, dislikes
# - Each cookie has expiration data (1 minute, 1 hour, 1 year)
# - It is used (Remember me) functionality


# PHP sessions
 # - Sesions are temporray(when user close the bwoser sessions data will be deleted).
 # - Sesions are the security attribute, It helps remember which user is currenly logged
 # - Signin, Sign out functionality

# Intro to MySQL database



//Store a new cookie


$expirationTime = time() + 3600; // 1 hour from now

//         Cookie name    Cookie Value      Expiration Time       Default cookie
setcookie("name", "Developement Class", $expirationTime, "/");

echo "Cookies value is set";




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bootsrap Grid</title>
  </head>
  <body>
    <h1 class="text-center">Bootsrap Grid</h1>


    <div class="container bg-secondary">
        <h3>Container</h3>

        <!-- 

        Responsive Grid coloums:
        Just percentage division: col-2, col-4, col-6 
        (Total is 12 potions and col 6 means half of the toal space)

        Device Responsive Grid columns
        col-sm-6, col-md-6, col-lg-7

        sm: Smaller divices
        md: Medium devices
        lg: Laptops
        xl: Big screens
        xxl: Biggest Minitor

        -->
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-2 bg-primary">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2 bg-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2 bg-danger">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-2 bg-primary">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="col-10 bg-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>



    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
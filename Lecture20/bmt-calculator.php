<?php

    // Dumps everything in $_GET to screen
    var_dump($_POST);

    $weight = $_POST['weight']; 
    $height = $_POST['height'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];




    // BMI(Body mass Index) = Weight / (Hight^2)



    $bmi = $weight / ($height * $height);



    echo "<h2> Your BMI is: " . $bmi . "</h2>"; 

    if($bmi >= 30.0){
        echo "<h3 style='color: red'>Your are Obese</h3>";
    }
    elseif($bmi >= 25.0 || $bmi < 30.0){
        echo "<h3 style='color: #f69a31'>Your are Over weight</h3>";
    }
    elseif($bmi >= 18.5 || $bmi < 25.0){
        echo "<h3 style='color: green'>Your are Normal weight</h3>";
    }
    else{
        echo "<h3 style='color: blue'>You are Underweight</h3>";
    }


    if(isset($_POST['calorie-count'])){

        // Colorie count = 10 * weight + 6.25 * height * 100 - 5 * age + 5

        $colorieCount = 10 * $weight + 6.25 * $height * 100 - 5 * $age + 5;
        echo "<h4>You need " . $colorieCount . " calories in a day</h4>";


    }












?>
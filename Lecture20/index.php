
<!-- 

- Continue with Form handling
    - Finish the BMT calculator

- Intro to database, what are types.
    - File database (text file, csv file, excel file)
        - Not that secure
        - Easy to use

    - MySQL databases, SQL databases, Oracle, etc
        - Very secure
        - Store large amount of data
        - Quick retreival of data

- Getting data from text file into Webpage (File handling)

- Build a bank application using the data from the file
    - Create a text file with data of Account holders
    - Get the data from file and show the table
    - Calcualte total and average Amount in Bank

-->




<html>
    <head>
        <title>Php class </title>

        <link rel="stylesheet" href="/assets/css/style.css"/>


    </head>
    <body>

        <h1> Class 20 </h1>

        <h2>Form Handling </h2>


        <form action="" method="POST">
            <h1> BMT calculator </h1>

            <label> Weight (Kg) </label><br>
            <input type="number" step=".01" name="weight"/>
            <!-- step attribute of the input box allow the decimal places upto specified lenght -->

            <br><br>
            <label> Height (meters) </label><br>
            <input type="number" step=".01" name="height"/>

            <br><br>
            <label> Age (years) </label><br>
            <input type="number" step=".01" name="age"/>

            <br><br>
            <label>Gender</label><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female

            <br><br>
            <input type="checkbox" name="calorie-count"/> <label>Do you want to get Calorie Count?</label>

            <br><br>
            <input type="submit" name="bmtCalculate"/>


        </form>



        <h1>Results</h1>
        <?php

        // This checks if the wight variable exists
        if(isset($_POST['weight'])){

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
        }






    ?>



    </body>
</html>

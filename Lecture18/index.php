
<!-- 

- More on Exception handling
    - Throwing a new custom exception using PHP builtin Exception class
    
- PHP Includes

-->



<html>
    <head>
        <title>My first php class </title>

        <link rel="stylesheet" href="/assets/css/style.css"/>


    </head>
    <body>

        <?php include "includes/header.php"; ?>


        <div class='my-page'>

            

        <h1>Homepage</h1>
        <br>
        <h1>PHP Class 4</h1>

        <h2>Exception handling</h2>

        <?php

            try{
                $var = 7/10;
                echo "<p style='color: green'> Succes: No Exception </p>";
            }
            catch(DivisionByZeroError $e){
                echo "<p style='color: red'>Error: Division by zero is not allowed</p>";
            }


        function checkNumber($marks){
            if($marks > 100){
                $exp = new Exception("Marks cannot go beyond 100 <br>Please enter marks that are less then or equal to 100.");
                throw $exp ;
            }
            else{
                return "All good";
            }
        }



        // Subjects marks cannot go above 100

        $totalMarks = 110;


        try{
            echo checkNumber($totalMarks);
        }
        catch(Exception $e){
            echo "<p class='error'>" . $e->getMessage() . "</p>";


            echo "<h1 class=''> Heading </h1>";
            echo '<h1 class=""> Heading 2 </h1>';

            // Third way
            echo "<h1 class=\"sdfsdf\">  \"Heading\" </h1>";
        }
        ?>
        

    </div>

      

    <?php include "includes/footer.php"; ?>



    </body>
</html>

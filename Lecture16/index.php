
<!-- 

- PHP Arrays
- Accosiative arrays
- Loops
    - While, for, foreach
    - Break, countue
- Conditional statements
- Switch Statemnt
- Operator

-->


<?php 

 $cars_comapnies = ["Toyota", "Honda", "Ford", "Volkswagon"];

 $carData = array("brand"=>"Toyota", "model"=>2020, "color"=>"Red", "Owner"=>"Syed");






?>

<html>
    <head>
        <title>My first php class </title>
    </head>
    <body>
        <h1>PHP Class 2</h1>

        <?php
            echo $cars_comapnies[1];

            echo "<br>";
            echo $carData["brand"];

            echo "<br>";
            echo $carData["model"];

            echo "<br>";
            echo $carData["color"];

            echo "<br>";
            echo $carData["Owner"];
        ?>


        <h2> Loops </h2>

        <?php

            for($counter = 0 ; $counter < 10 ; $counter++){
                echo "Current iteration " . $counter;
                echo "<br>";
            }




            // Foreach loop
            foreach($cars_comapnies as $singleCompany){
   
                if($singleCompany == "Ford"){
                    continue;
                }

                echo "<h2>" . $singleCompany . "</h2>";
                echo "<br>";


            }
        ?>


        <h2> Conditional statements </h2>

        <?php 

            $obtainedMark = 260;
            $totalMarks = 500;

            /*
                Percentage > 85  = A+,
                Percentage > 80  = A,
                Percentage > 70  = B,

            */


            $percentage = ($obtainedMark/$totalMarks) * 100;
        ?>


        <h2> Switch statements </h2>

        <?php

            switch($percentage){
                case $percentage < 50:
                    echo "<h3>Grade is F</h3>";
                    break;

                case $percentage < 60:
                    echo "<h3>Grade is D</h3>";
                    break;

                case $percentage < 70:
                    echo "<h3>Grade is C</h3>";
                    break;

                case $percentage < 80:
                    echo "<h3>Grade is B</h3>";
                    break;

                case $percentage < 85:
                    echo "<h3>Grade is A</h3>";
                    break;

                default:
                    echo "<h3>Grade is A+</h3>";
            }

        ?>


        <h2>Operator </h2>

        <?php

            $num = 68;

            // Modulu operator
            if($num % 2 == 0){
                echo "This number is even";
            }
            else{
                echo "This number is odd";
            }


            echo "<br><br><br>";

            //Exponential operator

            $number = 10 ** 8;

            echo $number;


            //Assignment operators

            $y = 5;

            //Simple assignment
            $x = $y;


            //Addition assignment
            $x += $y; // $x = $x + $y;


            //Subtraction assignment
            $x -= $y; // $x = $x - $y;



            //Comparison operaotr

            // ==, !=, >, <, >=, <=, ===


            $var1 = 100;
            $var2 = "100";

            if($var1 === $var2){
                echo "Its equal";
            }
            else{
                echo "Not equal";
            }












        ?>

      
    </body>
</html>


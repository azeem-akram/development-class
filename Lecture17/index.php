
<!-- 

- More on PHP loops
- Builtin PHP functions
- Custom functions
- Date and time stuff
- Exception handling

-->



<html>
    <head>
        <title>My first php class </title>

        <link rel="stylesheet" href="/assets/css/style.css"/>

    </head>
    <body>
        <h1>PHP Class 3</h1>


        <table>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>

                <th>English</th>
                <th>Maths</th>
                <th>Science</th>
                <th>Arabic</th>
                <th>Pushto</th>
                <th>Dari</th>
            </tr>


            <?php
                for($i =  1; $i <= 10; $i++){
                    echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>Student " . $i .  "</td>";
                        echo "<td>". rand(0, 100) ."</td>";
                        echo "<td>". rand(0, 100) ."</td>";
                        echo "<td>". rand(0, 100) ."</td>";
                        echo "<td>". rand(0, 100) ."</td>";
                        echo "<td>". rand(0, 100) ."</td>";
                        echo "<td>". rand(0, 100) ."</td>";
                    echo "</tr>";
                }
            ?>


        </table>




        <h2>PHP Builtin funcitons</h2>

        <?php
            $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

            echo "The strin length is: " .strlen($text);
            echo "<br>";
            echo "The square root of 100 is: ". sqrt(100);

            echo "<br>";
            echo sin(45);


            echo "<br>";
            $students = ["Syed", "Fouzia", "Azeem", "jawed"];


            echo "No of Elements: " . count($students);

            echo "<br><br><br>";
            var_dump($students);



        ?>



        <h2>PHP Custom funcitons</h2>

        <?php
            function addNumbers($num1, $num2){
                return $num1 + $num2;
            }


            echo "The sum function: ". addNumbers(654654, 45654);



            //Factorial

            // Factorial 3: (1 * 2 * 3) = 6
     




            // Factorial 10: (1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10) = 
            //1
            // 1  * 2
            // 2 * 3
            // 6 * 4
            // 24 * 5
            // 120 * 6
            // 720 * 7




            function myFactorial($num){
                if($num == 0 || $num == 1){
                    return 1;
                }
                else{
                    return $num * myFactorial($num - 1);
                }
            }


            echo "<br>";
            echo "Factorial of 3 = " . myFactorial(3);

            echo "<br>";
            echo "Factorial of 10 = " . myFactorial(10);

            echo "<br>";
            echo "Factorial of 15 = " . myFactorial(15);

            echo "<br>";
            echo "Factorial of 20 = " . myFactorial(20);


            // Demo functions
            function addToCart($productId, $quantity, $userId){

            }

        ?>


        <h2> Date and Time stuff </h2>

        <?php

            echo date("F-d-Y");
            echo "<br>";
            echo "<br>";

            $curTime =  time();

            echo date("D M j G:i:s T Y", $curTime);



        ?>


        <h2> Exception handling </h2>

        <?php


            try{
                $var = 7/0;

                echo "<p style='color: green'> Succes: No Exception </p>";
            }
            catch(DivisionByZeroError $e){
                echo "<p style='color: red'>Error: Division by zero is not allowed</p>";
            }


        ?>
        





      
    </body>
</html>


<?php

echo "<h1>End of the File</h1>";

?>



<!-- 

- Intro 
    - Hypertext preprocessor
- PHP Syntax
    - Comments
    - Variables
    - Echo/print commands
    - Data types
    - Strings and string castings
    - Numbers

-->


<?php 

 // This is the single line comment line

 /*
    This is a multiline comment
    2nd line
    3rd line
 */


 //Integer variable
 $myvar = 1;

 //String variable
 $name = "This is a string variable";
 
 // Float variable
 $var2 = 5.2654;

 //Boolean variable
 $var3 = false;



 //echo $myvar;


 $stu1 = "Syed";
 $stu2 = "Fouzia";
 $class = $stu1 . ", " . $stu2 . "  -  " .  $var2;




 //Number
 $totalMarks = 300;

 $englishMarks = 85;
 $scieceMarks = 93;
 $mathsMarks = 89;


 $totalObtainedMarks = $englishMarks + $scieceMarks + $mathsMarks;


 $percentage = ( $totalObtainedMarks / $totalMarks ) * 100 ; 




?>

<html>
    <head>
        <title>My first php class </title>
    </head>
    <body>
        <h1>PHP Class 1</h1>
        <?php  
        

        echo "Obtained Marks: ";
        echo $totalObtainedMarks; 

        echo "<br>Total Marks: ";
        echo $totalMarks;


        echo "<br>Percentage: ";
        echo $percentage . "%";



        ?>

    </body>
</html>


<h1>File handling</h1>
<?php

    $filename = 'file.txt';

    // If that file exists
    if(file_exists($filename)){
        echo "Success: File Opened Successfully"; 

        // array of lines
        $data = file($filename);

        echo "<br><br>";
        echo $data[0]; //Get data from Index 1
        echo "<br>";
        echo $data[1]; //Get data from Index 2

        //Using a Loop

        echo "<br><br>";
        echo "<h3> Using loops </h3>";
        foreach($data as $line){
            echo "<br>";
            echo $line;
        }




    }
    else{
       echo "Error: This file does not exists"; 
    }





?>
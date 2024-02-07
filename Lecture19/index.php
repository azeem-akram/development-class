
<!-- 

- Form handling
    - Methods like GET, POST
    - Backend getting of user data and processings

- Some form validation

-->


<?php 

    //First check if the data is actually sent
    // As method is get so we use $_GET['name-of-input-box']

    // If the method is POST we use $_POST['name-of-input-box']

  
    if( isset($_POST['num1']) ){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];

        $sumOfNumbers = $num1 + $num2 +$num3 + $num4;


        echo '<h1 style="color: green"> Result: ' . $sumOfNumbers . '<h1>';

    }

    


?>


<html>
    <head>
        <title>Php class </title>

        <link rel="stylesheet" href="/assets/css/style.css"/>


    </head>
    <body>

        <h1> Class 19 </h1>

        <h2>Form Handling </h2>

        <form method="POST" action="">
            <label> Number 1 </label>
            <br>
            <input name="num1" type="number"/> 

            <br><br>
            <label> Number 2 </label>
            <br>
            <input name="num2" type="number"/> 

            <br><br>
            <label> Number 3 </label>
            <br>
            <input name="num3" type="number"/> 

            <br><br>
            <label> Number 4 </label>
            <br>
            <input name="num4" type="number"/> 

            <br><br>
            <input name="btnSubmit" type="submit"/>

        </form>



        <form action="bmt-calculator.php">
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
            <input type="submit" name="bmtCalculate"/>





        </form>



    </body>
</html>

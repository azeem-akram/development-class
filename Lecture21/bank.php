<html>
    <head>

        <style>

            table{
                border-collapse: collapse;
            }


            th,td{
                border: 2px solid gray;
                padding: 20 20px;
            }
        </style>


    </head>

    <body>


    <table>
        <tr>
            <th> Account Number </th>
            <th> Account Holder Name </th>
            <th> Balance </th>
        <tr>
    

    <?php
        $fileName = 'bank-data.txt';

        if(file_exists($fileName)){
            $data = file($fileName);

            $totalBalance = 0;
            $noOfAccHolders = 0;

            foreach($data as $line){
                // New PHP function 
                $fields = explode(',', $line);

                echo "<tr>";
                echo "<td>" . $fields[0] . "</td>";
                echo "<td>" . $fields[1] . "</td>";
                echo "<td>" . $fields[2] . "</td>";
                echo "</tr>";

                $totalBalance += $fields[2];
                $noOfAccHolders += 1;
            }
            $averageAmount = $totalBalance / $noOfAccHolders;
        }


    ?>


    </table>


    <?php
        echo "<h1> Average Balance: $" . $averageAmount . "</h1><br>";
        echo "<h1> Total Balance: $" . $totalBalance . "</h1>";

    ?>


    </body>

</html>
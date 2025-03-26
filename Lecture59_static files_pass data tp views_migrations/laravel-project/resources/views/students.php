<html>
    <head>
        <title>All Students</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <body>
        <h1>All Students</h1>

        <div class="students-container">
            <?php 
            foreach ($students as $student) {
                ?>
                <a class="student-box" href="/students/<?php echo $student['id'] ?>">
                    <p><?php echo $student['id'] ?></p>
                    <h2><?php echo $student['name'] ?></h2>
                </a>
                <?php
            }
            ?>
        </div>


    </body>


</html>
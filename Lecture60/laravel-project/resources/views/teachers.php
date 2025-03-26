<link rel="stylesheet" href="/assets/css/style.css">


<?php

foreach ($teachers as $t) {
    ?>
        <a class="teacher-box">
            
            <?php
            if($t['gender'] == "Male"){
                ?>
                    <img src="/assets/images/male.png" width="100px"/>
                <?php
            }
            else{
                ?>
                    <img src="/assets/images/female.png" width="100px"/>
                <?php
            }
            ?>
            <br><br>
            <h2><?php echo $t['name'] ?></h2>
            <br>
            <?php echo $t['description'] ?></p>
        </a>
    <?php
}
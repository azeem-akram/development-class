<?php

class TaskView
{
    public function displayAllTasks($tasks){
        foreach ($tasks as $t) {
            ?>

                <h2><?php echo $t['name'] ?></h2>
            <?php
        }
    }
}



?>
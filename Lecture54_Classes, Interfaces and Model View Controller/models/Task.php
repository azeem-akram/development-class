<?php

class Task{
    private $dbConnections;

    public function __construct($con){
        $this->dbConnections = $con;
    }

    public function addTask($task){
        // Adding task to the database
    }

    public function getAllTask($task){
        // Get all the tasks
    }

    public function deleteTask($id){
        // Adding task to the database
    }


    public function editTask($task, $id){
        // Rditing task in the database
    }

}





?>
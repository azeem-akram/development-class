<?php

class Task{

    private $con;

    public function __construct($con){
        $this->con = $con;
    }


    // Adding a Task
    public function addTask($task) {
        $query = "INSERT INTO tasks (task) VALUES ('$task')";
        return $this->con->query($query);
    }

    // Geting all the task
    public function getTasks(){
        $query = "Select * from tasks";
        $results =  $this->con->query($query);
        return $results->fetch_all(MYSQLI_ASSOC); // Return 2 dimentional array
    }

    // Deleting Task
    public function deleteTask($id)  {
        
    }

    // Updating Task
    public function updateTask($id, $task){

    }

}


?>
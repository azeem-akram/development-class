<?php
include "./database.php";
include "./models/Task.php";
include "./views/TaskView.php";


class TaskController{

    private $model;

    private $view;


    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;
    }

    public function showAllTasks(){
        $tasks = $this->model->getTasks();
        $this->view->displayAllTasks($tasks);
    }

}

//Creating instance of the model
$model = new Task($conn);
$view = new TaskView();
$controller = new TaskController($model, $view);



?>
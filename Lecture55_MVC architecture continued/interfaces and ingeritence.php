<?php

class Person{

    //Properties
    protected $name;
    public $age;
    public $gender;

    //Constructor
    function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Methods
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function print(){
        return "Name: ". $this->name . " Age: " . $this->age . " Gender " . $this->gender;
    }
}


$person1 = new Person("Azeem", 29, "M");

$person1->set_name("Test 2");

echo "<h1>" . $person1->get_name() . '</h1>';
echo "<h2>" . $person1->print() . '</h2>';




// Interfaces

interface SupportPersonnel{
    public function handleTicket($ticket) : string;
}


class Admin implements SupportPersonnel{
    public function handleTicket($ticket): string{
        return "Admin processing a ticket " . $ticket;
    }
}

class Agent implements SupportPersonnel{
    public function handleTicket($ticket): string{
        return "Support Agnet processing a ticket " . $ticket;
    }
}


$admin1 = new Admin();
$agent1 = new Agent();


$ticket = "Ticket Example";
echo  "<br>";
echo $admin1->handleTicket($ticket);
echo  "<br>";
echo $agent1->handleTicket($ticket);




// Inheritence in PHP

class Fruit{
    protected $name;
    protected $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
}



class Cherry extends Fruit{
    public function print(){
        return $this->name . " " . $this->color;
    }
}


class Banana extends Fruit{

    private $property1;

    public function print(){
        return $this->name . " " . $this->color;
    }

}


class Apple extends Fruit{
    public function print(){
        return $this->name . " " . $this->color;
    }
}



$fruit1 = new Cherry("Cherry", "Red");

echo  "<br><br>";
echo $fruit1->print();



?>
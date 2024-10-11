<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User{
  public $username;
  public $email;
  public $password;
}

$user1 = new User();

$user1->username = 'John Doe';
echo var_dump($user1);


class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . ".";
    }
}

$myCar = new Car("red", "Toyota");
echo $myCar->message();
?>

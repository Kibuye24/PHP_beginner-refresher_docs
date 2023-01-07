<?php
/*-----------------------------Object Oriented Programming------------------------------------*/

/*
* Welcome to heaven. Object Oriented Programming makes coding easy to read and understand.
* From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
* OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User {
// Properties are just variables that belong to a class.
// Access Modifiers: public, private, protected
// public - can be accessed from anywhere
// private - can only be accessed from inside the class
// protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

//Constructor - A constructor is a method that makes it easier to create new objects.
 public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
 }

//Method - a method is a function that belongs to a class
    function set_name($name){
        $this->name = $name; //this points to the variable of name in this particular class or the class it is in.
    }
    //this particular function is usually known as a setter. There are also gettter functions
    function get_name(){
        return $this->name;
    }
}

//As an object class has already been created, you can instantiate the object
// $user = new User();
// $user1 = new User();

//Setting the name property of the class User to Kibuye
// $user->name = 'Kibuye'; //sets username as Kibuye

//Just as you can access a public variable, you can also access methods
// $user->set_name('Josh'); //sets username as Josh
// $user1->set_name('Ki'); //sets username1 as Ki 


// echo "Welcome " . $user->name . '<br>';

//Getting the names

// echo $user->get_name() . '<br>'; //Output Josh
// echo $user1->get_name() . '<br>';// Output Ki

//Using constructor function to create new users
$user = new User('Jim', 'jim@dunndermifflin.com', 'admin');
$user1 = new User('Angela', 'angela@dunndermifflin.com', 'PrincessWaffles');
$user2 = new User('Michael', 'michael@dunndermifflin.com', 'jan');
$user3 = new User('Dwight', 'dwight@dunndermifflin.com', 'jimisaloser99');

echo $user->name . '<br>';
echo $user1->name . '<br>';
echo $user2->name . '<br>';
echo $user3->name . '<br>';

//Inheritance
class Employee extends User {
    public $title;

    public function __construct($name, $email, $password, $title) {
        return parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee = new employee('Dwight', 'dwight@dundermifflin.com', 'michaelscott', 'Manager');

echo 'Employees name is ' . $employee->name . ' and employees title is ' . $employee->get_title() . '<br>';
echo $employee->get_title();

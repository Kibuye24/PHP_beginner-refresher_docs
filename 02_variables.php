<?php
//Declaring variables in PHP is simple

//String
$name = 'Kibuye'; //Age
$age = 24;  //Number
$amount = 20.5; //float

//You can output two or more variables through concatenation using a period (.)
echo 'My name is ' . $name . 'and I am ' . $age . ' years old';
//Output My name is Kibuye and I am 24 years old.

//You can also define constants in PHP using the define() function
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;//output - localhost

//You can also perform arithmetics 
$num = 5 * 5;
echo $num;//Output - 25

//Using numbers as string will automatically convert to numbers or float unlike JS
var_dump('6' * '5') //Output - int(30)





?>
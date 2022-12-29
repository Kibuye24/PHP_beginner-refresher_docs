<?php

/*
All functions have a name. They can also have arguments and parameters.
first, you have to declare a function. Let's name it declaration.
syntax - 
function declaration(){
    //code here gets executed
}

The function then has to be called
declaration(arguments); //calling the function to be executed
example:
*/ 

function sum($num1, $num2){
    return  $num1 + $num2; 
}

echo sum(3, 4), "<br>";//Output - 7

//You can also pass arguments togeter with parameters when declaring the function
function subtract($num1 = 10, $num2 = 11){
    return $num1 - $num2;
}

$sub = subtract();
echo 'The subtraction is ' . $sub, '<br>';//Output - The subtraction is 1

//Anonymous functions don't have names and are stored as variables
$multiply = function($num1, $num2){
    return  $num1 * $num2;
};

echo $multiply(3,5), '<br>';//Output - 15

//Arrow functions. These are shorter and better versions of anonymous functions

$divide = fn($num1, $num2) => $num1/$num2;

echo $divide(12, 2);//Output 6

//Short, one-line arrow functions don't need a return stamement.

<?php

/*
Conditionals in any programming language are essential
They use operators and they include the following:
    < Less than
    > Greater than
    <= less than or equal to
    >= greater than or equal to
    == equal to
    === identical to
    != not equal to
    !== not identical to
Identiacal means not only the value but the type is the same
eg 3 !== '3'. 3 is a number and '3' is a string.
*/

var_dump(3 === '3'); //Output bool(false)
var_dump(3 == '3'); //Output bool(true)

/*
    The syntax for conditionals in PHP is
    if(conditions){
        //Code to be executed based on fulfillment of condition
    }
*/

$age = 14;

if($age >= 18){
    echo 'You are old enough to vote';
//However, age is less than 18. For that, we can use an else statement
}else{
    echo 'You are not old enough to vote!';
}
//Output - "You are old enough to vote

//In case of multiple conditions, elsif can be use

$time_of_day = date('h'); //This will return the hour of the day
$tod = 3;

if($tod >= 6 && $tod <= 12){
    echo 'Good Morning';
} elseif($tod >12 && $tod <=18){
    echo 'Good Afternooon';
}else{
    echo 'Good Evening';
} //Output is Good Evening

/*The code can be made cleaner using ternary operatos
syntax - condition ? returns true : else statement 
                            or
        condition ?? returns true
Use the below example
*/

$arr_1 = ['Something'];

$result = !empty($arr_1) ? $arr_1[0] : 'Nothing Found'; 
//The function checks if arr_1 is not empty. If it isn't it returns value at index 0. Else it returns nothing found

$result2 = !empty($arr_1) ?? null;
//If arr_1 is not empty then it returns true. If empty, nothing is returned.

echo $result;
echo $result2;

/*
Sometimes there are multiple conditions. Switch, Case can be used in place
They can be considered as multiple elseif() statements
syntax - switch(condtion){
    case 1:
        echo "You are 1";
        break;
    case 2:
        echo "You are 2";
        break;
    case n:
        echo "You are n";
        break;
    default:
        echo "This is the default message";
}
The break statement is a must to ensure the loop doesn't
run forever.
*/

$fav_fruits = 'apple';

switch($fav_fruits){
    case 'melon':
        echo "Your favorite fruit is melon";
        break;
    case 'banana':
        echo "Your favorite fruit is banana";
        break;
    case 'apple':
        echo "Your favorite fruit is apple";
        break;
    default:
        echo "You have no favorite fruit";
    }
//Output - Your favorite fruit is apple


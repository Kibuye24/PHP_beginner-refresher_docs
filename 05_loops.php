<?php
/*------------------------For Loop------------------------------*/


/*
Undestarnding loops is important in programming. It has a simple syntax and powerful effect
Essentially, a loop is literally the computer jumping ("Looping") over and over until a certain condition is met.
s
syntax - for(initial;condition;inccrement){
    //code here gets executed
}
*/

for($x = 0; $x < 10 ; $x++){
    echo 'Number counting in loop: ' . $x . '<br/>';
}

//The above example shows that the loop is executed for the variable x up until it reaches 9,
//9 is less than 10 which is the condition of the loop. The initial value is 0 and loop runs till 9

/*------------------------While Loop------------------------------*/

$x = 1; //the variable

while($x < 10){
    echo 'Number counting in loop: ' . $x . '<br/>';
    $x = $x + 1; //increment the variable so the app doesn't crash

    //Without an increment, $x is always 1 and it will alwas be less than 10. App crashes.
}

/*----------------------do?while! loop-----------------------------*/
/*
The do while loop is different from the while loop as the code is always executed
even if the condition doesn't match. However, it will only execute the block of code once
making it not crash. A use case can be to detect an exception in a database.
Example:
*/ 

$num = 7;//initial

do {
    echo 'Doing loop: ' . $num . '<br/>';
    $num++;//increment
} while ($num < 5);//condition

//The output will be Doing loop: 7. The code is executed once
//even though the condition doesn't match. On the second iteration the loop stops.

//If the condition matches, it behaves like a normal loop

$num = 0; //initial

do {
    echo 'Doing loop: ' . $num . '<br/>';
    $num++; //increment
} while($num < 5);//condition

/*----------------------ForEach loop-----------------------------*/

/*
**The loop is normally used in arrays and perhaps the most used loop
in php development.


 **Syntax
  foreach ($array as $value){
    //code here gets executed
}
Example:
*/

$programming_languages = ['PHP', 'Javascript', 'Python', 'C'];

foreach($programming_languages as $language){
    echo 'I can code in ' . $language . '</br>';
};

//The same can be executed in a for loop but it is complicated and not clean
$programming_languages = ['PHP', 'Javascript', 'Python', 'C'];
for($x = 0; $x < count($programming_languages); $x++){
    echo 'I can code in ' . $programming_languages[$x] . '</br>';
}

//The output is the same but with a for loop, it can be a bit confusing and difficult

//For each also works well with associative arrays

$player = [
    'first_name' => 'Lebron',
    'second_name' => 'James',
    'status' => 'GOAT',
];

foreach( $player as $key => $value ){
    echo "$key - $value </br>";
};





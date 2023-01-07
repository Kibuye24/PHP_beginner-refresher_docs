<?php
/*-----------------------------String Functions--------------------------*/
//String functions are used to manipulate or tell informatio about strings.

//Declaring the variable
$string = 'Hello World';

//Checking the length of the string
echo strlen($string ), "<br>"; //Output - 11 including spaces

//Checking position of the first occurence a string
echo strpos($string, 'o'), "<br>"; //Output - 4

//Checking the position of the last occurece of a string
echo strrpos($string, 'l'), "<br>"; //Output - 9. The last 'l' is the 9th index.

//Reverse a string
echo strrev($string), "<br>"; //Output - dlroW olleH

//Convert all characters to lowercase
echo strtolower($string), "<br>"; //Output - hello world

//Convert all characters to Uppercase
echo strtoupper($string), "<br>"; //Output - HELLO WORLD

//Uppercase the first character of each word
echo ucwords($string), "<br>"; //Output - Hello World

//Replace a string with another
echo str_replace('Hello', 'Goodbye', $string), "<br>"; //Output - Goodbye World

//Return portion of a string specified by the offset and lenght
echo substr($string, 0, 5), "<br>"; //Output - Hello (returns index 0 to 5)
echo substr($string, 5), "<br>"; //Output - World (returns index 5 onwards)

//Starts with conditional 
if (str_starts_with($string, 'Hello')){
    echo 'YES';//Output - YES
};

//Ends with conditional
if (str_ends_with($string, 'RLD')){
    echo 'YES', "<br>";
}else{
    echo 'NO', "<br>";
}//Output - NO. The cases do not match.

//Using HTML tags with strings
$string2 = "<h1>Hello!</h1>";

echo $string2, '<br>'; //Output -  Hello in a H1 format

//To output string 2 with the html tags as a string and not h2 format
echo htmlspecialchars($string2), '<br>'; //Output - <h1>Hello!</h1>

//You can also print strings and other formats while validating using the printf() function
/*
**These use format specifiers. If a wrong type is used with a wrong specifier, it will return an error
**The format specifiers in PHP are similar to that of C and C++
**They include the following:
 - %d for integers
 - %s for strings
 - %f for floats
**Be sure to check the official documentation for more specifiers. 
**[Link - https://www.php.net/manual/en/function.printf.php]
**Example:
*/

printf("My name is %s and I am %d years old." , 'Kibuye', 24);
//Output - My name is Kibuye and I am 24 years old. The string and integer values replace the specifiers.
//If I put 24.5 instead of 24 the output will be rounded off to 24 as %d is for integers while 24.5 is a float
//If any other format is used, the output will be 0



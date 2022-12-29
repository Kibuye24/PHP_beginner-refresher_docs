<?php
/*
PHP works a lot with arrays. Array functions help with manipulation of arrays.
*/

//Declaration of the array
$cars = ['Mercedes', 'Peugot', 'Ferrari'];

//Reading the array
print_r($cars); //Output - the array

/*--------Adding to an Array --------------*/
//There are several ways to add to an array. The inbuilt functions are as follows:

$cars[] = 'Nissan'; //This will add Nissan to the end of the array
print_r($cars);

// array_push() function
//syntax array_push(array, ...values);
array_push($cars, 'Toyota', 'Subaru'); //This will add the cars to the end of the array
print_r($cars);

//You can also add to the start of an array using the array_unshift() function
//syntax array_unshift(array, ...values);
array_unshift($cars, 'Volvo', 'McLaren');
print_r($cars); //This will add the above cars the start cars array

/*----------------Removing Elements from an Array------------------*/
//array_pop() function removes elements from the end of an array
//syntax array_pop(array);

array_pop($cars);
print_r($cars); //The last element of the array -Subaru- is removed

//array_shift() function removes the first element from an array
//syntax array_shift(array);
array_shift($cars);
print_r($cars); //The first element of the array -Volvo- is removed

//unset() function removes specified element from array
//syntax - unset($cars[element]);

unset($cars[2]);
print_r($cars); //The 2nd element and index 2 of array is removed. Array will jump from index 1 to 3.

/*--------------------Splitting arrays-------------------------*/
//array_chunk(array, size) splits the array into n-times(size) of chunks

$chunked = array_chunk($cars, 2);
print_r($chunked); //Output - Cars array split into chunks of two cars

/*----------------------------Concatenating(merging) arrays---------------------*/
//array_merge(array, array); //merges two arrays
$arr1  = [1, 2, 3];
$arr2  = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);//Output  array of 1 through 6

//A spread operator can be used to copy elements of an array into a new one
$arr4 = [...$arr1, ...$arr2];
print_r($arr4); //Output array of numbers 1 through 6

//You can combine two different arrays making one to be the keys and the other to be the value
//The array_combine() function is used for this
$a = array('a', 'b', 'c');
$b = array('apple', 'boy', 'cat');

$c = array_combine($a, $b);
print_r($c);
//Output is array with a, b, and c as key and apple, boy, and cat as values 

//To get the keys from an array, you can use the array_keys() function
$d = array_keys($c);
print_r($d);
//Prints the keys of the $c array
//array_values($c); would have returned the values of the array

//You can also us the range() function to  create an array within a range of numbers
//syntax - range(start, end, interval);
//start is the initial value, end is the end value, and interval is the interval between the numbers

$numbers = range(1, 10, 2);
print_r($numbers);
//The output will be odd numbers between 1 and 10. It starts counting from one and jumps with an interval of 2


/*-------------------------------------Iterating through an array-----------------------------------*/
/*
**Just like JS, PHP uses the map function to iterate through an array.
**syntax - array_map(function(){
    //code in here gets executed
}, array)
Example:
*/

$num = array_map(fn($number) => 'Number is ' . $number, $numbers);
print_r($num);
//Output will be Number is + the numbers in the number array. 

/*NOTE: In the above, an arrow function is used. An annonymoys function can also be used as follow
    $num = array_map(function($number) {
        return'Number is ' . $number, $numbers);
    }, array);
**Output will be the same
*/

/*You can also filter an array for specific values using the array_filter() function
This function takes a condition that will be used to filter

syntax - array_filter(array, function(parameters){
    //conditions are here. eg. 
    if (number < 0){
        echo 'Number ' .$number . 'is less than 0';
    }
})
Let's filter the array to return numbers less than  or equal to 5 in an example*/
$less_than_5 = array_filter($numbers, fn($number) =>  $number <= 5);

print_r($less_than_5);//Output - 1, 3, 5;

/*array_reduce() is used to combine all the elements of an array into one
** A common use case is to add all the elements of an array
** syntax - array_reduce($array, function($carry, $numbers){
    return $carry + $numbers;
})
Example: Here, we will add the scores of a pupil in an exam and average them
*/

$scores = [90, 100, 88, 86, 84];
$sum = array_reduce($scores, fn($carry, $score) =>
    $carry + $score);
$count = count($scores);
$average = $sum/$count;

echo 'The average score of the student is ' . $average;
//Output - The average score of the student is 89.6

//The above are only some of the more commonly used array functions. There are many more to look at!!!
//I reccommend looking at the official documentation and learning how to use them
//here - https://www.php.net/manual/en/ref.array.php
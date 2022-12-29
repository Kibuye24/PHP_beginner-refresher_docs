<?php 
//simple arrays

$scores = [88, 95, 100, 100, 86];
$cars = array('Volvo', 'Mercedes', 'Ferrari');

print_R($scores);

//To get an item from the array, you have to reference its
//index in the array. Note that the first item is index 0 in programming languages

echo $cars[2]; //Output is 'Ferrari'

/*Associative arrays 
These arrays allow you to decide the index 
or 'key' values of items in array
*/

$players = [
    1 => 'Jack',
    2 => 'Jill',
    24 => 'Kibuye'
];

$hex = [
    'white' => '#ffff',
    'black' => '#0000',
    'red' => '#ff0000', 
];

//Accessing items in associative arrays
echo $players[24]; //Output is 'Kibuye'

//A popular usecase is databases
$person = [
    'first_name' => 'Cristiano',
    'last_name' => 'Ronaldo',
    'team' => 'free agent',
];

echo $person['team']; //Output is 'free agent'

//Just like a JS object, there can be multiple items and filds

$ballon_winners = [
    [
        'first_name' => 'Lionel',
        'last_name' => 'Messi',
        'ballon trophies' => 7,
    ],
    [
        'first_name' => 'Cristiano',
        'last_name' => 'Ronaldo',
        'ballon trophies' => 5,
    ],
    [
        'first_name' => 'Johan',
        'last_name' => 'Cruyff',
        'ballon trophies' => 3,
    ],
    ];

//You can access array items as below
echo $ballon_winners[1]['last_name']; //output is Ronaldo

//Since APIs usually use a lot of JSON, the json_encode() function is used
//json_decode() function returns a JSON object as an arry
$json = json_encode($ballon_winners);
var_dump($json); //Output - Returns ballon winners array with keys and values

$array = json_decode($json);
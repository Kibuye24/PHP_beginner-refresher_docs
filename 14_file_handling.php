<?php
/*---------------------------------------------------File Hanlding------------------------------------------------*/
/*
* File handling in PHP allows you to read, write, and manipulate the contents of a file on your server.
* You can use file handling to create, modify, and delete files, as well as to read from and write 
* to existing files. 
* There are several inbuilt file functions in php.
*/

$file = 'extras/players.txt';

//To chec if file exists

if(file_exists($file)){
    echo readfile($file) .'<br>';
    //Code prints out contents of the file. However, this can be done better
}

if  (file_exists($file)){
    $handle = fopen($file, 'r'); //Opens the file with read permissions. w is for write etc...
    $contents = fread($handle, filesize($file)); //Reads the file contents of the size of the file.
    fclose($handle); //Close the file
    echo $contents; //print out the contents of the file.
} else {
    $handle = fopen($file, 'w'); //If file doesn't exist, we create by writing into it.
    $contents = 'Rashford' . PHP_EOL . 'Bruno' . PHP_EOL . 'Martinez'; //PHP_EOL is used to write out in newline
        fwrite($handle, $contents);
    fclose($handle);
    //If the initial extras/players.txt file is deleted, the loop will run to the else and file will be created.
    //on refresh, the file will be existant and print the new list of players.
}
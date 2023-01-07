<?php
/*--------------------------------------Exceptions and Erros------------------------------------------*/
/*
* Exceptions in PHP are a way to handle runtime errors in your code. When an exception is thrown, 
it can interrupt the normal flow of your program and allow you to handle the error in a specific way. Example:
*/

function divide($num){
    if(!$num){
        throw new Exception('Division is by zero');
    }

    return 1/$num;
}

try {
    // code that might throw an exception
    echo divide(4) . '<br>'; //Output is 0.25
    echo divide(0); //Will catch an exceptions
  } catch (Exception $e) {
    // code to handle the exception
    echo "Caught an Exception: " . $e->getMessage()  . "<br>";
  } finally {
    echo "Exiting first exception... <br>";
  }
  
  try {
    // code that might throw an exception
    echo divide(5) . '<br>'; //Output is 0.2
    echo divide(0); //Will catch an exceptions
  } catch (Exception $e) {
    // code to handle the exception
    echo "Caught an Exception: " . $e->getMessage() . "<br>";
  } finally {
    echo "Exiting second exception... <br>";
  }

  echo "Hello World!"; //The code will be executed despite being an error above. This is because the exception is
  //caught and the error handled elegantly.
  
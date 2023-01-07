<?php 
/*-----------------------------------------Sanitizing Iputs---------------------------------*/ 
/*
** If someone were to put Javascript code as an Input, what happens?
eg: <script>alert("This is JS")</script>.
The code would be executed in the input. This is risky and can be used to put malicious code. Or notorious SQL injections
*/

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    //Above we sanitize with the filter input.
    //Its syntax is filter_input(INPUT_TYPE, variable name, sanitazation method); '

    echo '<h1>' . $name . '</h1>';
    echo $age . "<br>";   
}

//You can sanitize inputs by wrapping the code using htmlspecialchars() function or filterinput() function
//When sanitized, the javascript code won't execute but read as a string as we have set the input type as string
//For age we have set it as an integer. It won't read any other input type.

/*
**You can also use filter_var() function. Example:
* $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
*/
?>


<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=Kibuye&age=24">Click</a> 
<?php //$_SERVER['PHP_SELF'] takes information of the current page. We use it to reload the page
//We are wrapping it with htmlspecialchars() function.
 ?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST' >
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name"/>
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age"/>
    </div>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php 
//The form picks up the inputs with the names of name and age. Since the method is _POST,
//you can access them using the $_POST['name'] method.
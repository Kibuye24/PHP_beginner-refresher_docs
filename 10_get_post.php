<?php 
/*-----------------------------------------$POST&$GET---------------------------------*/ 
/*
** - Superglobal variables are what make PHP special and POST and GET superglobals are essential especially in
API requests.
A GET Request takes information from the server while a post request posts information from client to server.
In this example, we will be looking at URLs and their endpoints.
You can get more information from: https://rapidapi.com/blog/api-glossary/endpoint/
$GET can be used for forms and urls while $POST can only be used for forms
*/

if (isset($_POST['submit'])) {
    echo '<h1>' . $_POST['name'] . '</h1>';
    echo $_POST['age'] . "<br>";   
}
?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Kibuye&age=24">Click</a> 
<?php //$_SERVER['PHP_SELF'] takes information of the current page. We use it to reload the page ?>

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
<?php 
/*------------------------------------Sessions------------------------------*/

/*
* Sessions are like cookies and stores user data such as preferences and personalization.
* However, sessions are not stored on the client side but on the server side allowing seamless 
* transitions from page to page as user preferences are stored. Personalized content is persisted
* in different pages. The information is usually stored in variables.
*/


//Let's create a session
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'Kibuye' && $password == 'password') {
        $_SESSION['username'] = $username; //This creates a session of the username if the username mathches the password
        header('Location: /php-crash/extras/dashboard.php'); //It will redirect to this page once session has loaded
    } else {
        echo "Incorrect Logins"; 
        //if login or password is incorrect, the message will be shown.
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST' >
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php 
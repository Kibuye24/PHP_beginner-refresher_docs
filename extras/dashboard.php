<?php
session_start();
if (isset($_SESSION['username'])){
    echo 'Welcome to the Matrix ' . $_SESSION['username'] . '<br>';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo 'Welcome to the Matrix Guest' . '<br>';
    echo '<a href="logout.php">Home</a>';
}

?>

<div>
    <iframe width="560" height="560" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="LOL, OF COURSE IT IS THIS VIDEO" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
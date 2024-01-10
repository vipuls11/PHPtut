<?php
// What is session?
// Used to manage information across difference pages


//Start the session and get the data
session_start();
// echo "Welcome". $_SESSION['username'];
// echo "<br> Your favorite category is". $_SESSION['favCat'];
// echo "<br>";
session_unset();
session_destroy();
echo "You have logout.";
?>
<?php
// What is session?
// Used to manage information across difference pages


//Start the session and get the data
session_start();
if(isset($_SESSION['username'])){
echo "Welcome". $_SESSION['username'];
echo "<br> Your favorite category is". $_SESSION['favCat'];
echo "<br>";
}
else{
    echo "please login to continue";
}
?>
<?php
// What is session?
// Used to manage information across difference pages


// Verify the user login info
session_start();
echo $_SESSION['username']= "Harry";
echo $_SESSION['favCat']= "Books";
echo "We have  saved your session."
?>
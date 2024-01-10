<?php
$host= "localhost";
$username= "root";
$password= "";
$dbconnect= "php";

$conn= mysqli_connect($host, $username, $password, $dbconnect); 

if(!$conn){
// echo "success";
// }
// else{
die("database is not connect".mysqli_connect_error());
}
?>
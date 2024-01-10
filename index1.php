<?php

// if(isset ($_POST['name'])){
    $insert = false;
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "vipul";  
  
$conn = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_error()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
else{
    // print_r('connection successfully');
    $sql = "INSERT INTO trip( name, age, gender, email, phone, other, dt)
     VALUES ('". $_REQUEST['name']."','" . $_REQUEST['age']."','" . $_REQUEST['gender']."','" . $_REQUEST['email']."','". $_REQUEST['phone']."','" . $_REQUEST['desc']."', current_timestamp());";


if ($conn->query($sql) === TRUE) {
// echo "New record created successfully";
// $insert = True;
// sayHello();
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

//  } 


?>
<?php
 if(isset ($_POST['submit'])){
    echo "Data Set";
}
else{
    echo "Data not set";
}

?>
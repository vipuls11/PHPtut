<?php

// $arr = array('this', 'that', 'what');
//  this are called index arrays:
// Echo  $arr[0]. "<br>"; 
// echo $arr[1]."<br>";
// echo $arr[2];

// Associative arrays

$favCol = array(
    'shubham' => 'red', 
    'rohan' => 'green',
    'harry' => 'brown'
);

foreach($favCol as $key=> $value){
    echo "Favorite color of $key is $value <br>";
}

// echo $favCol['harry']."<br>";
// echo $favCol['shubham']."<br>";

?>
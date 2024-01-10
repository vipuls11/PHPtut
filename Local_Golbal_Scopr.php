<?php
echo "Welcome to scope and local/global vars in php<br>";


 $a = 98;
 $b = 9;
function printValue(){
    // $a =97;
    // echo "The value of your variable is $a";
    global $a, $b;
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a;
echo $b;
printValue();
echo "<br>The value of your variable a is $a and b is $b";
echo var_dump($GLOBALS);

?>
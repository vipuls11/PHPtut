<?php
$str = "This is a string <br>" ;
echo $str;
$lenn = strlen($str);
echo "The length of this string is "  .$lenn;

echo "The number of words in this string is ". str_word_count($str)." Thank you <br>";

echo "The reversed string is ". strrev($str)." Thank you <br>";

echo "The search for is in this string is ". strpos($str, "is")." Thank you <br>";

echo "The replace string is ". str_replace("is", "at", $str)." Thank you ";

// echo $lenn;
?>

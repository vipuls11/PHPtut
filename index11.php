<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>PHP</title>
</head>
<style>
    /* .wrapper{
  display:grid;
  height:100vh;
  place-items:center 
}*/
</style>
<body>
<!-- <div class="wrapper bg-gray-400 antialiased text-gray-900">
<div>
    
    <img src="https://source.unsplash.com/random/350x350" alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">    
    
 <div class="relative px-4 -mt-16  ">
   <div class="bg-white p-6 rounded-lg shadow-lg">
    <div class="flex items-baseline">
      <span class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
        New
      </span>
      <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
    2 baths  &bull; 3 rooms
  </div>  
    </div>
    
    <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A random Title</h4>
 
  <div class="mt-1">
    $1800
    <span class="text-gray-600 text-sm">   /wk</span>
  </div>
  <div class="mt-4">
    <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
    <span class="text-sm text-gray-600">(based on 234 ratings)</span>
  </div>  
  </div>
 </div>
  
</div>
  </div> -->

  <?php
  $variable1 = 25;
  $variable2 =45;
  echo $variable1;
  echo $variable2 ; 
  echo" <br>";
  print_r ($variable1 + $variable2 );
  echo" <br>";
  // Comparison Operators
  echo " The vaule of 1==4 is ";
  echo var_dump(1==4);
  echo "<br>";
  echo " The vaule of 1==4 is ";
  echo var_dump(1!==4);
  echo "<br>";
  echo " The vaule of 1==4 is ";
  echo var_dump(1>=4);
  echo "<br>";
  echo " The vaule of 1==4 is ";
  echo var_dump(1<=4);
  echo "<br>";

  // Increment/Decrement Operators
  echo $variable1++;
  echo "<br>";
  echo $variable1--;
  echo "<br>";
  echo ++$variable1;
  echo "<br>";
  echo --$variable1;
  echo "<br>";
  // Logical Operator

   $myVar = (true and false);
   echo "<br>";
   echo var_dump($myVar);

   $myVar = (true or false);
   echo "<br>";
   echo var_dump($myVar);

   $myVar = (true xor false);
   echo "<br>";
   echo var_dump($myVar);
  ?>
<?php
//  Data types in php
// 1.String
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Array
// 6. Object
echo "<br>Data Types <br>";
$var = "This is a string";
echo var_dump($var);
echo "<br>";

$var = 67;
echo var_dump($var);
echo"<br>";

$var = 67.1;
echo var_dump($var);
echo"<br>";

$var = true;
echo var_dump($var);
echo"<br>";

?>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Php </title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: grey;
            margin: auto;
            text-align: center;
            padding: 25px;
        }
        h1{
            color: white;
            padding-bottom: 20px
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>This is container</h1>
        <?php
        // if else, else if statement
        $age =50;
        if($age > 34){
            echo "You can go to the party";
        }
        else if($age==7) {
            echo "You are 7years old";
        }
        else{
            echo "You can not go to the party";
        }
        //  Array Function 
        $languages = array(" Python", " C++", " php", " Nodejs", " Javascript");
        echo "<br>";
        // echo   $languages[0];
        // echo "<br>";
        // echo $languages[3];
        echo count($languages);
        echo $languages[0];

        // Loops in PHP
        // $a = 0;
        // while ($a <=10){
        //     echo "<br> The value of a is:";
        //     echo $a;
        //     $a++;
        // }

        // Iterating arrays in PHP using while loop
        // $a = 0;
        // while ($a < count($languages)){
        //     echo "<br> The value of languages is: ";
        //     echo $languages[$a];
        //     $a++;
        // }

         //  do while loop
    //      $a = 0;
    //    do  {
    //          echo "<br> The value of languages is: ";
    //          echo $a;
    //          $a++;
    //      }
    //      while ($a < 10);

         // For loop

        //  for($a=0; $a < 10; $a++){
        //     echo "<br> The value of a is: ";
        //     echo $a; 
        //  }

        // Foreach

        // foreach($languages as $value){
        //         echo "<br> The value from foreah loop is";
        //         echo $value;
        // }

        // function

        function print5(){
            echo "<br> FIVE";
        }
        print5();

        function print_number($number){
            echo "<br> Your number is  ";
            echo $number;
        }
        print_number(15);
        print_number(53.9);
        ?>
    </div>
</body>
</html>
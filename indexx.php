<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Welcome to travel form</title>
   <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Comfortaa', cursive;
    }
     .container{
        text-align: center;
        max-width: 80%;
        /* background-color: rgb(198, 15, 241); */
        padding: 34px;
        margin:auto;  
     }
    
     .container h3, p{
        text-align: center;
        margin: 10px;
        color: bisque;
        font-size: 35px; 
     }
     
     .para{
      text-align: center;
        margin: 10px;
        color: palevioletred;
        font-size: 20px;
     }
     input, textarea{
        width: 70%;
        margin: 10px 0;
        padding: 12px;
        font-size: 15px;
        outline: none;
        border: 2px solid black;
        border-radius: 8px;
     }
     .btn{
        padding: 7px 20px;
        font-size: 20px;
        font-weight: 500;
        background-color: grey;
        border-radius: 8px;
        color: white;
        cursor: pointer;
     }
      .btn:hover{
        color: skyblue;    
      }

      .bg{
        width: 100%;
        height: 850px;
        position: absolute;
        z-index: -1;
        opacity: 0.8;
      }

      .submitmsg {
         font-size: 17px;
         color: green;
       font-weight: 700;
      }
   </style>
</head>
<body>
    <img class="bg" src="./download.jfif" alt="">
    <div class="container">
        <h3>Welcome to IIT Kharagpur Us Trip Travel form</h3>
        <p class="para">Enter your details to confirm this form to confirm your participation in the trip</p>

       <?php
            // 

            //function definition
            // if($insert == true) 
          {
         echo "<p class='submitmsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
       
       
        if(isset ($_POST['submit'])){
         echo "<p class='submitmsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
       }
       else{
           echo "Data not set";
       }
       
       ?>

            <form action="indexx.php" method="post"> 
                <input type="text" name="name" id="name" placeholder="Enter your name" required>

                <input type="text" name="age" id="age" placeholder="Enter your Age" required>

                <input type="text" name="gender" id="gender" placeholder="Enter your Gender" required>

                <input type="text" name="email" id="email" placeholder="Enter your Email" required>

                <input type="text" name="phone" id="phone" placeholder="Enter your Phone" required>

                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here" required   ></textarea><br>

                <button class="btn" name="submit" >Submit</button>
                <!-- <button class="btn">Reset</button> -->
            </form>
    </div>

</body>
</html>

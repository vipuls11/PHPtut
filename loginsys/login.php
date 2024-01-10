<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include("partial/_dbconnect.php");
    require("partial/_nav.php");
    ?>
    <?php
    $login = false;
    $showerror = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $exists=false;
      
            $sql= "Select * from phpuser where username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $login = true;
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: welcome.php"); 
            }
            else{
                $showerror = true;
                // $showerror = "Your username and password are invalid.";
            }
        }
    ?>
        <?php
        if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> you are logged in and your welocme to ours website.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($showerror){
    // '.$showerror.'
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Invalid Credentials.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
    <div class="container my-3">
        <h3 class="text-center">Login to our Oriflame It Solution website </h3>
        <div class=" w-50 mx-auto my-5">
            <div>
                <form action="login.php" method="post" class="w-100">
                    <div class="mb-3  col-md-12">
                        <label for="username" class="form-label">User name</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="textlHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control w-full" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
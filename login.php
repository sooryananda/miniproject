<?php
include ("include/database.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style1.css" /> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">

        <title>Register</title>
    </head>
    <body>
        <header class="header">
            <div><img src="images/logo.png" alt="Logo" class="logo"></div>
             <nav class="main-nav">
             <ul class="main-nav-list">
                 <li><a class="main-nav-link" href="index.php">Home</a></li>
                 <li><a class="main-nav-link" href="#">Shop</a></li>
                 <li><a class="main-nav-link" href="categories.html">Categories</a></li>
                 <li><a class="main-nav-link" href="#">Track Order</a></li>
                 <li><a class="main-nav-link last" href="registration.php">Account</a></li>
             </ul>
          
         </nav>
        </header>
        <div class="login-box">
        <h1>Login</h1>
        <form action="">
            <label for="">Email</label>
            <input type="text" name="email_ad" placeholder="">
            <label for="">Password</label>
            <input type="password" name="pass_ad" placeholder="">
            <input type="submit" value="Submit">

        </form>
        
    </div>
    <br><br><br><br>
    <!--------------------------FOOTER STARTS------------------------------>
    <?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>




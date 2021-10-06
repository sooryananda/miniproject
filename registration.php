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

    <?php
if(isset($_POST["register"]))
{
	$name=$_POST['user_name'];
	$password=$_POST['password'];
	$sql="insert into users(USERNAME,PASSWORD) values('$name','$password')";
	if($db->query($sql))
	{
		echo "success";
	}
	else{
		echo "failed";
	}
}
?>
<!---------------------------HEADER------------------------------------->
<!---------------------------------------------------------------------->
        <header class="header">
            <img src="images/logo.png" alt="Logo" class="logo">
             <nav class="main-nav">
             <ul class="main-nav-list">
                 <li><a class="main-nav-link" href="index.php">Home</a></li>
                 <li><a class="main-nav-link" href="#">Shop</a></li>
                 <li><a class="main-nav-link" href="categories.html">Categories</a></li>
                 <li><a class="main-nav-link" href="#">Track Order</a></li>
                 <li><a class="main-nav-link last" href="registration.php">Account</a></li>
                 <li><a class="main-nav-link last" href="login.php">ADMIN</a></li>
            </ul>
          
         </nav>
        </header>
<!----------------------sign up--------------------------------------->

    <div class="row">
       <div class="col-2">
      <div class="signup-box">
          <h1>Sign Up</h1>
          <form action="">
              <label for="">First name</label>
              <input type="text" placeholder="">
              <label for="">Last name</label>
              <input type="text" placeholder="">
              <label for="">Email</label>
              <input type="email" placeholder="">
              <label for="">Password</label>
              <input type="password" placeholder="">
              <label for="">Confirm Password</label>
              <input type="password" placeholder="">
              <input type="submit" name="register" value="Submit">
          </form>
          <p>By clicking Submit you are agreeing to our<br><br>
          <a href="#"><u>Terms and conditions</u></a></p>
      </div>
      </div>

      <div class="col-2">

      <div class="login-box">
        <h1>Login</h1>
        <form method="post" action="">
            <label for="">Email</label>
            <input name="email_user" type="text" placeholder="">
            <label for="">Password</label>
            <input name="pass_user" type="password" placeholder="">
            <input type="submit" value="Submit" name="login">

        </form>
        <?php
     if(isset($_POST["login"]))
    {
	$sql="select * from users where user_name='{$_POST["email_user"]}' and password='{$_POST["pass_user"]}'";
	$res=$db->query($sql);
	if($res->num_rows>0)
	{
		$ro=$res->fetch_assoc();
		$_SESSION["ID"]=$ro["id"];
		$_SESSION["USERNAME"]=$ro["user_name"];
		echo "<script>window.open('index.php')</script>";
	}
	else
	{
		echo '<script>alert("INVALID USERNAME or PASSWORD")</script>';
	}
  }
?>
    
    </div></div>
</div> <br><br><br><br><br><br><br><br><br><br>
    <!--------------------------FOOTER STARTS------------------------------>
    <?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>
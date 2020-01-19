<?php
include('server.php');

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: home.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
    unset($_SESSION['password']);
  	header("location: home.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<!--background image-->
<div class="hero-image">
  <!--navbar-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">UniStud</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  <div class="hero-text">
    <h1 style="font-size:50px">I am Michael</h1>
    <p>I'm an engineer. Trust me</p>
    <button>News</button>
  </div>
</div>

<!--Login modal-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Login to Your Account</h1><br>
				<form action="index.php" method="post">
					 <input type="text" id="username" name="username" placeholder="Username">
					 <input type="password" id="password" name="password" placeholder="Password">
					 <input type="submit" name="login_user" class="login loginmodal-submit" value="login">
				</form>
				   <div class="login-help">
					   <a href="register.php">Register</a> - <a href="#">Forgot Password</a>
				   </div>
				</div>
			 </div>
 </div>

<!--Section-->
<section class="section2 section2-too">
  <div class="ab-out">
       <div class="logosec">
            <img src="img/logo.png">
        </div>
        <div class="textsec">
            <h1 style="text-align:center;">Oulahlah</h1>
            <hr style="color: : #8b9393;">
            <br>
            <br>
            <p>loremloremloremloremloremlorem loremlorem lorem loremloremlorem loremloremv loremv
            </p>
        </div>
    </div>
</section>

<!--Footer-->
   <footer class="footeraki">
     <br>
      <p style="font-size: 17px;">Copyright &copy; 2019 - UniStud</p>
     <br>
  </footer>

</body>
</html>




<!DOCTYPE html>
<html>

<head>
  
  <title>Login Form </title>
  <link rel="stylesheet" href="login.css"  />
	
	<style type="text/css">
		.Login a {
  text-decoration: none;
  font-size: 15px;
  color: #1c4772;

}

		</style>
  
</head>


<body >
<header>

<div class="logo">
<a href="#home"><img style="padding-left:20px;" src="./images/imgnew.png" alt="Logo" width="130" height= "70" ></a>
 </div>
</header>

<div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="./images/vedio3.mp4" type="video/mp4">
        </video>
    </div>

	<div class="Login" ><h1> Login <br> <br></h1>
	
	
    <form method="post" action="login_process.php">
	  <p> Email</p> 
	  <input type="text" name="user_name" id="email"placeholder="Enter your email" required>
	  <p>Password </p>
	  <input type="password" id="password" name="password" placeholder="Enter your password" required>
	  <br>
	  
	  <a href="#">Forgot Password ?</a><br><br>

		<button class="btn1" onclick="return validateForm()">Login</a></button><br><br>
	
	  <a href="register.php"><center>New User? Register</center></a><br>
	</form>
	
  
  </div>	
		
<script src="js/validate.js"></script>  
</body>

</html>
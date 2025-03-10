<!DOCTYPE html>
<html>

<head><title>Register </title>
 <link rel="stylesheet" href="register.css"  />
</head>


<body>

  <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="./images/vedio3.mp4" type="video/mp4">
        </video>
    </div>
    <header>

<div class="logo">
<a href="#home"><img style="padding-left:20px;" src="./images/imgnew.png" alt="Logo" width="130" height= "70" ></a>
 </div>
</header>

<form action= "register_process.php" method="post">;

<div class="Login"><h1> Register <br> <br></h1>

    <p>User Name</p>
		<input type="text" name="name" placeholder="Enter your name" required>
		<p> Address</p> 
        <input type="text" name="address" placeholder="Enter your address" required>
        <p> Email</p> 
        <input type="text" name="email" id="email" placeholder="Enter your email" required>
         <p>Password </p>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
		<p>Confirm Password </p>
        <input type="password" placeholder="*******" id="confirmPassword" required>
        <br>
	
		

      <input type="submit" name="submit" value="Register" onclick="return validateForm()">
      
		<a href="index.php"><center style="color:#1c4772;">Already registered? Login</center></a><br>

      
   

  </div>
  
  </form>
		

  <script src="js/validate.js"></script>  
</body>
</html>
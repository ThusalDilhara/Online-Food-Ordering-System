

<!DOCTYPE html>
<html land="en">
 <head>
  <meta charset="UTF-8">
   <title>contact us</title>
    <link rel="stylesheet" href="css/contact2.css">
	
    <!-- font link  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 </head>

 <header>

	<div class="logo">
	<a href="#home"><img src="images/1.png" alt="Logo" width="130" height= "75" ></a>
	</div>

    <nav class="navbar">
        <a href="home.php #home">Home</a>
        <a href="home.php #special">Special</a>
        <a href="home.php #menu">Menu</a>
        <a href="home.php #review">Review</a>
        <a href="order.php #order">Order</a>
		<a href="about.php">About Us</a>
		<a href="contact.php">Contact Us</a>
		<a href="feedback.php">Feedback</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>
	
	<div>
		
		<button class="btn2"><a href="index.php">Sign Up</a></button>
		
	</div>
	


		
</header>
    <body>
     <div class="container">
	  <h1>Contact us</h1>
	 
	  <div class="contact-box">
	   <div class="contact-left">
	   <h3 style="text-align:center;">For inquiries or assistance,please reach out to us!</h3>
	   <form action="contact_process.php" method="POST" id="reg_form">
        
                <div class="border">
                    <div>
                        <label for="name"> Name :</label>
                        <input class="form-contactus" type="text" id="fname" name="name" placeholder="  name.." autocomplete="off" required="">
                    </div><br>
                    <div>
                        <label for="email">Email :</label>
                        <input class="form-contactus" type="email" id="email" name="email" id="email"placeholder="  Your valide email.." >
                    </div><br>
                    <div>                        
                        <label for="male">Male :</label>
                        <input class="form-radio" type="radio" name="gender" id="male" value="M" checked>
                        <label for="male">Female :</label>
                        <input class="form-radio" type="radio" name="gender" id="female" value="F">
                    </div><br>
                    <div>
                        <label for="description">Description :</label><br>                        <textarea class="form-element" name="description" rows="8" cols="60" required></textarea>
                    </div><br>
                    <div>
                        <input type="submit" class="btn" id="contactus_btn" value="Submit" onclick="return validateForm()"style="vertical-align:middle">
                    </div><br>
                </div>    
	   
	   
        </form>
<script src="js/validate.js"></script>  
</body>
  </html>
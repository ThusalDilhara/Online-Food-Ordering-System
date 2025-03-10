<!DOCTYPE html>
<html>

	<head>
		<title>About Us</title>
		
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- css file link  -->
		<link rel="stylesheet" href="css/styles.css">
	 


		<style type="text/css">

header{
    position: fixed;
    top:0; left: 0; right:0;
    background-color: #F3FEB8;
    padding: 1px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
  
}

header .navbar a{
    font-size: 1.7rem;  
    padding:.5rem 1.5rem;
    color:var(--light-color);
}


header .navbar a:hover{
    color:#fff;
    background-color:#FFDE4D;
    border-radius: 30px;
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: .5rem;
    height:4.5rem;
    line-height: 4.5rem;
    width:4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color:var(--black);
    border-radius: 50%;
    background: #eee;
}

header .icons i:hover,
header .icons a:hover{
    color:#fff;
    background: #FFDE4D;
    transform: rotate(0deg);
}

header .icons #menu-bars{
    display: none;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background:#FF4C4C;
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: #FFB22C;
    letter-spacing: .1rem;
    background:#FFB22C;
}
</style>
	</head>
	
	<body>
	
	<!-- header section -->
	
	
		<header>

			<div class="logo">
				<a href="home.php #home"><img src="images/1.png" alt="Logo" width="130" height= "75" ></a>
			</div>

    <nav class="navbar">
        <a href="home.php #home">home</a>
        <a href="home.php #special">special</a>  
        <a href="home.php #menu">menu</a>
        <a href="home.php #review">review</a>
        <a href="order.php #order">order</a>
		<a class="active" href="#about">about us</a>
		<a href="contact.php">contact us</a>
		<a href="feedback.php">Feedback</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>
	
	<div class="container">
		
		<button class="btn2"><a href="index.php">Sign Up</a></button>
		
	</div>
	


		
</header>

<!-- header section ends-->


<!-- search form  -->
	<form action="" id="search-form">
		<input type="search" placeholder="search foods..." name="" id="search-box">
		<label for="search-box" class="fas fa-search"></label>
		<i class="fas fa-times" id="close"></i>
	</form>

	

<!-- About section start -->
	
	<section class="about" id="about">

   
    <h1 class="heading" style="margin-top:80px;color:#FF4C4C;"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/2.png" alt="">
        </div>

        <div class="content">
            <h3>Online Food Delivery & Takeout</h3>
            <p>At Kelani Foods Shop, we bring you a delightful selection of fresh, flavorful dishes crafted with care. From savory rice and kottu to indulgent sweets and refreshing beverages, our menu offers something for everyone. Experience the taste of quality and tradition in every bite!At Kelani Foods Shop, we bring you a delightful selection of fresh, flavorful dishes crafted with care. From savory rice and kottu to indulgent sweets and refreshing beverages, our menu offers something for everyone. Experience the taste of quality and tradition in every bite!.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- About section start -->
	
	
	
<!-- footer section starts  -->

<footer class="footer">
  	 <div class="foot">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>KelaniFoods</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 	
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
						 <h2>University of Kelaniya<h2>
					<h2>Kelaniya,Sri lanka.<h2>
					<h2>Telephone: 037 200 200<h2>
					
  	 			</div>
  	 		</div>
			<div class="logo">
				<a href="home.php #home"><img src="images/1.png" alt="Logo" width="150" height= "100" ></a>
			</div>
  	 	</div>
  	 </div>
  </footer>


<!-- footer section ends -->
	
	
	
	
	
	
	
	
</body>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</html>
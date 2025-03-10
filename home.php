
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>KelaniFoods</title>

		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

		<!-- font link  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

		<!-- css file link  -->
		<link rel="stylesheet" href="./css/styles.css">

      


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

/*sign up button*/

.btn2{
  border-radius: 30px;
  background-color:#e7e7e7;
  padding: 12px 20px;
  text-align: center;
  font-size: 18px;
  margin: 4px 20px;
  margin-right:0px;
  transition: 0.1s;
  cursor:pointer;
 
}

.btn2:hover {
  background-color: #FFDE4D;  
}
.user{
	font-size:2rem;
}
/*home slider*/

.home .home-slider .slide{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1rem; 
    padding-top: 10rem;
	padding-left:5rem;
}

.home .home-slider .slide .content{
    flex:50 0 2rem;
}

.home .home-slider .slide .image{
    flex:10 1 60rem;
	padding-left: 10rem;
}

.home .home-slider .slide .image img{
    width: 100%;
	padding-top: 10rem;
}

.home .home-slider .slide .content span{
    color:var(--green);
    font-size: 2.5rem;
	
}

.home .home-slider .slide .content h3{
    color:var(--black);
    font-size: 5rem;
}

.home .home-slider .slide .content p{
    color:var(--light-color);
    font-size: 2.2rem;
    padding:1.8rem 0;
    line-height: 1.5;
}

.swiper-pagination-bullet-active{
    background:var(--green);
	
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
.sub-heading{
    text-align: center;
    color:#FF4C4C;
    font-size: 2rem;
    padding-top: 1rem;
}

.btn-row{
    display: flex;
    flex-direction:column; 
    gap: 10px; 
    margin-top: 10px; 
}



.btn4{
background-image: linear-gradient(239deg,#ffac2d 7%,#ff3300);
cursor: pointer;
font-size: 1.7rem;
font-weight: bold;
color: #fafafa;
border-radius: .5rem;
margin-top: 1.5rem;
bottom:15px;
box-sizing: border-box; 
left:5px;
height:40px;
width: 80%;
}

.menu .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.menu .box-container .box{	
  flex:1 1 30rem;
  position: relative;
  overflow: hidden;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  border:.1rem solid rgba(0,0,0,.3);
  cursor: pointer;
  border-radius: .5rem;
  
}

.menu .box-container .box .image{
  height:100%;
  width:100%;
  object-fit: cover;
  position: absolute;
  top:100%; left:0%;
}

.menu .box-container .box .content{
  text-align: center;
  background:#fff;
  padding:2rem;
}

.menu .box-container .box .content img{
  margin:1.5rem 0;
}

.menu .box-container .box .content h3{
  font-size: 2.5rem;
  color:#333;
}

.menu .box-container .box .content p{
  font-size: 1.6rem;
  color:#666;
  padding:1rem 0;
}

.menu .box-container .box:hover .image{
  top:0;
}

.menu .box-container .box:hover .content{
  transform: translateY(100%);
}



</style>

	</head>
<body>
    
<!-- header section -->

<header>
      
	<div class="logo">
	<a href="#home"><img src="images/1.png" alt="Logo" width="130" height= "75" ></a>
	</div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#special">special</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="order.php #order">order</a>
		<a href="about.php">about us</a>
		<a href="contact.php">contact us</a>
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


<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search foods..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Today's Special</span>
                    <h3>HOT PIZZA</h3>
                    <p>Experience the perfect slice! Fresh ingredients, mouthwatering flavors, and a cozy atmosphere. Welcome to Kelani Food</p>
                    <a href="order.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/offer1.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Today's Special</span>
                    <h3>FRIED CHICKEN</h3>
                    <p>Savor the taste of perfection! Juicy, flavorful chicken dishes made with the finest ingredients.</p>
                    <a href="order.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/offer2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Today's Special</span>
                    <h3>HOT BURGER</h3>
                    <p>Bite into bliss! Juicy, mouthwatering burgers crafted to perfection with the freshest ingredients.</p>
                    <a href="order.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/offer3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>


<!-- home section ends -->



<!-- special section starts  -->

<section class="special" id="special">

    <h3 class="sub-heading"> our special </h3>
    <h1 class="heading"> Popular foods </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/food1.jpg" alt="">
				<span class="price">Rs.450.00</span>
				
			<h3>Rice & Curry</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="btn-row">
            
            <a href="order.php" class="btn3" style="width:80%;margin-left:40px;">order now</a>
            
            
			<form action="cart_process.php" method="POST">
            <input type="hidden" name="name" value="Rice & Curry">
            <input type="hidden" name="price" value="450.00">
           <input type="hidden" name="quantity" value="1"> 
            <button  type="submit" class="btn4">Add-cart <i class="fa fa-shopping-cart"></i></button>
            </form>
            
            </div>
        </div>
		
		
		
		<div class="box">
            <img src="images/food2.jpg" alt="">
				<span class="price">Rs.1550.00</span>
				
			<h3>Biryani</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            
            <div class="btn-row">
            
            <a href="order.php" class="btn3" style="width:80%;margin-left:40px;">order now</a>
            
            
			<form action="cart_process.php" method="POST">
            <input type="hidden" name="name" value="Biriyani">
            <input type="hidden" name="price" value="1550.00">
           <input type="hidden" name="quantity" value="1"> 
            <button  type="submit" class="btn4">Add-cart <i class="fa fa-shopping-cart"></i></button>
            </form>
            
            </div>
        </div>
		
		
		
		
		<div class="box">
            <img src="images/food3.jpg" alt="">
				<span class="price">Rs.850.00</span>
				
			<h3>Kottu</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
            <div class="btn-row">
            
            <a href="order.php" class="btn3" style="width:80%;margin-left:40px;">order now</a>
            
            
			<form action="cart_process.php" method="POST">
            <input type="hidden" name="name" value="Kottu">
            <input type="hidden" name="price" value="850.00">
           <input type="hidden" name="quantity" value="1"> 
            <button  type="submit" class="btn4">Add-cart <i class="fa fa-shopping-cart"></i></button>
            </form>
            
            </div>
        </div>
		
		
		
		
		
		
		<div class="box">
            <img src="images/food4.jpg" alt="">
				<span class="price">Rs.50.00</span>
				
			<h3>Hoppers</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            
            <div class="btn-row">
            
            <a href="order.php" class="btn3" style="width:80%;margin-left:40px;">order now</a>
            
            
			<form action="cart_process.php" method="POST">
            <input type="hidden" name="name" value="Hoppers">
            <input type="hidden" name="price" value="50.00">
           <input type="hidden" name="quantity" value="1"> 
            <button  type="submit" class="btn4">Add-cart <i class="fa fa-shopping-cart"></i></button>
            </form>
            
            </div>
        </div>
		
		
		
		
		
		<div class="box">
            <img src="images/food5.jpg" alt="">
				<span class="price">Rs.150.00</span>
				
			<h3>String Hoppers</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            
            <div class="btn-row">
            
            <a href="order.php" class="btn3" style="width:80%;margin-left:40px;">order now</a>
            
            
			<form action="cart_process.php" method="POST">
            <input type="hidden" name="name" value="String Hoppers">
            <input type="hidden" name="price" value="150.00">
           <input type="hidden" name="quantity" value="1"> 
            <button  type="submit" class="btn4">Add-cart <i class="fa fa-shopping-cart"></i></button>
            </form>
            
            </div>
        </div>
		
		
		
		<div class="box">
            <img src="images/food6.jpg" alt="">
				<span class="price">Rs.1800.00</span>
				
			<h3>Pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
            <div class="btn-row">
            
            <a href="order.php" class="btn3" style="width:80%;margin-left:40px;">order now</a>
            
            
			<form action="cart_process.php" method="POST">
            <input type="hidden" name="name" value="Pizza">
            <input type="hidden" name="price" value="1800.00">
           <input type="hidden" name="quantity" value="1"> 
            <button  type="submit" class="btn4">Add-cart <i class="fa fa-shopping-cart"></i></button>
            </form>
            
            </div>
        </div>
		

        

    </div>

</section>

<!-- special section ends -->




<!-- menu section starts  -->

<section class="menu" id="menu">

    <h3 class="sub-heading"> our special </h3>
    <h1 class="heading"> delicious Menu </h1>

     <div class="box-container">

        <div class="box">
           <img class="image" src="images/menu1.jpg" alt="burger">
            <div class="content">
                <img src="images/icon1.png" alt="">
                <h3>Hot & Spicy burger</h3>
                <p>Our Classic Cheeseburger features a juicy, perfectly seasoned beef patty topped with melted cheddar cheese, fresh lettuce, ripe tomatoes, crispy pickles, and a dollop of our signature sauce, all nestled in a toasted brioche bun. It's a timeless favorite that's sure to satisfy your burger cravings.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/menu2.jpg" alt="pizza">
            <div class="content">
                <img src="images/icon2.png" alt="">
                <h3>Hot & Spicy pizza</h3>
                <p>Our Margherita Pizza is a delightful classic featuring a thin, crispy crust topped with a rich tomato sauce, fresh mozzarella cheese, and aromatic basil leaves. Finished with a drizzle of extra virgin olive oil, it's a simple yet flavorful pizza that celebrates the essence of Italian cuisine.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/menu3.jpg" alt="drinks">
            <div class="content">
                <img src="images/icon3.png" alt="">
                <h3>Soft drinks</h3>
                <p>Quench your thirst with our Classic Cola. This refreshing beverage offers the perfect balance of sweetness and carbonation, providing a crisp and invigorating taste with every sip. Enjoy it chilled for maximum refreshment.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/menu4.jpg" alt="ice cream">
            <div class="content">
                <img src="images/icon4.png" alt="">
                <h3>Ice cream</h3>
                <p>Indulge in our creamy Vanilla Bean Ice Cream, made with real vanilla beans for a rich and authentic flavor. Each scoop is velvety smooth, offering a perfect balance of sweetness and a delightful, natural vanilla aroma. A classic treat that’s perfect on its own or paired with your favorite dessert.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/menu5.jpg" alt="cakes">
            <div class="content">
                <img src="images/icon5.png" alt="">
                <h3>Sweet cakes</h3>
                <p>Delight in our decadent Chocolate Fudge Cake. This rich and moist cake is layered with luscious chocolate fudge frosting and topped with a sprinkle of chocolate shavings. Each bite is a heavenly blend of deep cocoa flavor and melt-in-your-mouth goodness, making it the perfect indulgence for any chocolate lover.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/menu6.jpg" alt="rice">
            <div class="content">
                <img src="images/icon6.png" alt="">
                <h3>rice and kottu</h3>
                <p>Indulge in our Rice & Kottu Combo, featuring a serving of savory Fried Rice paired with our vibrant Chicken Kottu Roti. The Fried Rice offers a comforting blend of tender rice, vegetables, and your choice of protein, while the Chicken Kottu Roti delivers a spicy kick with stir-fried roti and succulent chicken. A deliciously balanced meal that combines the best of both worlds!</p>
            </div>
        </div>

    </div>

</section>

<!-- menu section ends -->



<!-- review section starts  -->


<?php
include 'db_config.php';  


$sql = "SELECT fname,lname, feedback FROM Feedback";
$result = mysqli_query($con, $sql);
?>

<section class="review" id="review">

    <h3 class="sub-heading">Customer Review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

        <?php
            if (mysqli_num_rows($result) > 0) {
              
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="swiper-slide slide">
                            <div class="user">
                                <div class="user-info">
                                    <h3>' .$row['fname']." ".$row['lname']. '</h3>
                                    <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                                </div>

                            </div>
                            <p>' .$row['feedback'] . '</p>
                          </div>';
                         
                }
            } else {
                echo '<p>No feedback available.</p>';
            }
            ?>

            </div>

        </div>

    </div>
    
</section>

<!-- review section ends -->




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
				<a href="index.php #home"><img src="images/1.png" alt="Logo" width="150" height= "100" ></a>
			</div>
  	 	</div>
  	 </div>
  </footer>


<!-- footer section ends -->



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
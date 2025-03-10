

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Online Food delivery and takeout</title>

		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

		<!-- font link  -->
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
    


	<!--header section start-->

<header>

			<div class="logo">
				<a href="home.php #home"><img src="images/1.png" alt="Logo" width="130" height= "75" ></a>
			</div>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="home.php #special">special</a>  
        <a href="home.php #menu">menu</a>
        <a href="home.php #review">review</a>
        <a href="#order">order</a>
		<a href="about.php #about">about us</a>
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


<!-- search form  -->
	<form action="" id="search-form">
		<input type="search" placeholder="search foods..." name="" id="search-box">
		<label for="search-box" class="fas fa-search"></label>
		<i class="fas fa-times" id="close"></i>
	</form>
	
<!--header section end-->





<!-- order section starts  -->

<section class="order" id="order">

    <h3 class="sub-heading" style="color:#FF4C4C;"> order now </h3>
    <h1 class="heading"> free and fast </h1>

    <form action="order_process.php" method="POST">

        <div class="inputBox">
            <div class="input">
                <span><b>your name</b></span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="input">
                <span><b>Phone number</b></span>
                <input type="tel" placeholder="enter your number" name="number" id="phoneNo"required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span><b>your order</b></span>
                <input type="text" placeholder="enter food name" name="order" required>
            </div>
            <div class="input">
                <span><b>additional food</b></span>
                <input type="text" placeholder="extra with food" name="extra">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span><b>how many orders</b></span>
                <input type="number" placeholder="how many orders" name="qty" required>
            </div>
            <div class="input">
                <span><b>order date</b></span>
                <input type="date" name="date" required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span><b>your address</b></span>
                <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10" required></textarea >
            </div>
            <div class="input">
                <span><b>your message</b></span>
                <textarea name="message" placeholder="enter your message" id="" cols="30" rows="10" required></textarea>
            </div>
        </div>

        <input type="submit" value="order now" class="btn" onclick="return validateForm()">

    </form>

</section>

<!-- order section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</head>
<!DOCTYPE html>
<html>

	<head>
		<title>Cart</title>
	       
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- css file link  -->
		<link rel="stylesheet"href="css/styles.css">
		<!-- php file link  -->
		
		
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
    font-size: 1.55rem;  
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
        <a href="order.php #order">order</a>
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






<!--shoppping cart-->
<?php
include 'db_config.php';

$sql = "SELECT * FROM Cart";
$result = mysqli_query($con, $sql);

$totalAmount = 0; // Initialize total amount

?>

<div class="cart">
    <h1 class="heading1">Shopping Cart</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="10%">Item Name</th>
                    <th width="10%">Price (Rs)</th>
                    <th width="15%">Quantity</th>
                    <th width="20%">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $total = $row['price'] * $row['quantity'];
                        $totalAmount += $total;
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . number_format($row['price'], 2) . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . number_format($total, 2) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Your cart is empty.</td></tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr></tr><tr></tr>
                <tr>
                    <td colspan="3" style="text-align:right;"><strong>Total:</strong></td>
                    <td><b><?php echo number_format($totalAmount, 2); ?></b></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

	
	
<!-- footer section starts  -->

<footer class="footer">
  	 <div class="foot">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Kelani Foods</h4>
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
	
	
<!-- custom js file link  -->
<script src="js/script.js"></script>	
	
	
</body>
</html>
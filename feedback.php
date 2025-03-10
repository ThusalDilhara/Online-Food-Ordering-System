

<html>
<head> 
	<title>Customer Feedback</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="css/feedback22.css">
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

.name1{
	width: 100%;
	padding: 10px;
	margin: 10px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}
.feedback-container {
	margin-top: 50px;
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.form-wrapper {
    width: 100%;
	margin-top: 50px;
	padding: 20px;
	
	
}

table {
    width: 100%;
}

.form-heading {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

.form-details {
    margin-bottom: 20px;
}

label {
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 5px;
}

.input-field, #visit-date, #feedback-textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="radio"] {
    margin-right: 5px;
}

.submit-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

.submit-btn:hover {
    background-color: #45a049;
}

.feedback-form-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-wrapper {
    padding: 20px;
}

.form-heading {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.form-details {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

label {
    font-weight: bold;
}

.input-field {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    width: 100%;
}

.radio-group {
    display: flex;
    gap: 10px;
}

.submit-btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
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
	<a href="home.php #home">home</a>
	<a href="home.php #special">special</a>
	<a href="home.php #menu">menu</a>
	<a href="home.php #review">review</a>
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

    <section class="order" id="order">

    
    <h1 class="heading"> Customer Feedback </h1>

    <form action="feedback_process.php" method="POST">

        <div class="inputBox">
            <div class="input">
                <span><b>First Name</b></span>
                <input type="text" placeholder="first name" name="fname" required>
            </div>
            <div class="input">
                <span><b>Last Name</b></span>
                <input type="tel" placeholder="last name" name="lname" required >
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span><b>Email</b></span>
                <input type="text" placeholder="Email" name="email" id="email" required>
            </div>
            <div class="input">
                <span><b>Phone Number</b></span>
                <input type="text" placeholder="phone Number" name="phoneNo" id="phoneNo" required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span><b>Order Number</b></span>
                <input type="number" placeholder="order number" name="orderNo" required>
            </div>
            <div class="input">
                <span><b>Date of Visit</b></span>
                <input type="date" name="date" required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span><b>Your Feedback</b></span>
                <textarea name="feedback" placeholder="your feedback" id="feedback" cols="30" rows="10" required></textarea >
            </div>
            
        </div>

        <input type="submit" value="SUBMIT" class="btn" onclick="return validateForm()">

    </form>

</section>

<script src="js/validate.js"></script>  
</body>
</html>
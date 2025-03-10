<?php
include 'db_config.php';

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  $sql = "INSERT INTO Cart (name, price, quantity) VALUES ('$name', '$price', '$quantity')";

  if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>
                alert('Item added to the cart Successfully..!');
                window.location.href = 'cart.php';
     </script>";
    exit();
  } else {
    echo "Error: " . mysqli_error($con);
  }

  mysqli_close($con);
}

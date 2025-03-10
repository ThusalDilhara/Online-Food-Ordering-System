<?php
  include 'db_config.php';
  
  mysqli_select_db($con ,"KelaniFoods_db");

    $name =$_POST['name'];
    $email=$_POST['email'];
    $Address =$_POST['address'];
    $password =$_POST['password'];
  
    $sql = "INSERT INTO Customers(name,address,email,password)
    VALUES('$name','$Address','$email','$password')";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
header("Location: index.php");
exit();

mysqli_close($con);
?>
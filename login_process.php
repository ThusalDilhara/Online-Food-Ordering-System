<?php
  include 'db_config.php';
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Customers WHERE email='$user_name' AND password='$password'";
    $result = $con->query($sql);

  
    if ($result->num_rows > 0) {
        
        $_SESSION['user_name'] = $user_name;

        
        header("Location: home.php");
        exit();
    } else {
      
        echo "Invalid username or password.";
    }
}

mysqli_close($con);
?>
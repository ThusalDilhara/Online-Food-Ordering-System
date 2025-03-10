<?php

include 'db_config.php';

mysqli_select_db($con ,"KelaniFoods_db");

$sql="INSERT INTO orders (name, number,order_item,AdditionalFood, quantity,OrderDate, Address,Message)
VALUES
('$_POST[name]','$_POST[number]','$_POST[order]','$_POST[extra]','$_POST[qty]','$_POST[date]','$_POST[address]','$_POST[message]')";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "<script type='text/javascript'>
                alert('Order placed successfully!');
                window.location.href = 'home.php';
     </script>";
      exit();

mysqli_close($con);

?>

<?php

include 'db_config.php';

mysqli_select_db($con ,"KelaniFoods_db");

$sql="INSERT INTO Contact (name, email, gender,Description)
VALUES
('$_POST[name]','$_POST[email]','$_POST[gender]','$_POST[description]')";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "<script type='text/javascript'>
                alert('Thank you for Reaching us...!');
                window.location.href = 'home.php';
     </script>";
      exit();

mysqli_close($con);

?>

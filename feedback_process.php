 <?php
  include 'db_config.php';
  
  mysqli_select_db($con ,"KelaniFoods_db");

    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $email=$_POST['email'];
    $phone =$_POST['phoneNo'];
    $date =$_POST['date'];
    $feedback =$_POST['feedback'];
    $orderNo=$_POST['orderNo'];

    $sql = "INSERT INTO Feedback(fname,lname,email,phone,visitedDate,feedback,orderNumber)
    VALUES('$fname','$lname','$email','$phone','$date','$feedback','$orderNo')";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "<script type='text/javascript'>
                alert('Thank You for Your valuable Feedback!');
                window.location.href = 'home.php #review';
     </script>";
exit();

mysqli_close($con);
?>
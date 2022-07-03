<?php
session_start();
require('_dbConnect.php');

$customerId=$_SESSION['id'];
$CustomerMessage=$_POST['message'];

$query="INSERT INTO `customer_query` (`CID`, `Message`) VALUES ('$customerId', '$CustomerMessage')";
$result = mysqli_query($con,$query);
echo '<script>alert("Your Message Has Been Sent Successfully!");</script>';
header("refresh:1,url=home.php");
?>

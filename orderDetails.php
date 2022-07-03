<?php
require '_dbConnect.php';
session_start();
$showAlert = false;
$Name = $_POST['name'];
$CID = $_SESSION['id'];
$MOBILE = $_POST['mobile'];
$ADDRESS = $_POST['address'];
$PINCODE = $_POST['pincode'];
$ITEM_Name = $_POST['abc'];

$query = "INSERT INTO order_details (`Name`,`CID`,`Mobile`,`Address`,`Pincode`,`ItemName`) VALUES ('$Name','$CID','$MOBILE','$ADDRESS','$PINCODE','$ITEM_Name')";

$result = mysqli_query($con,$query);

if($result)
{
  $showAlert = true;

 if($showAlert)
 {

  header("refresh:4, url=home.php");
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> Order Placed Successfully!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 
 }



}
else
{
  require '_nav.php';
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Something Went Wrong!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
header("refresh:1, url=signup_login.php");
}
?>

<script src="Javascript/sweetalert.min.js"></script>
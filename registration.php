<?php
require '_dbConnect.php';
$showAlert = false;
$Name = $_POST['name'];
$EMAIL = $_POST['email'];
$MOBILE = $_POST['mobile'];
$PASSWORD = $_POST['password'];
$CPASSWORD = $_POST['cpassword'];

$query = "INSERT INTO userinfo (`Name`,`Email`,`Mobile`,`Password`) VALUES ('$Name','$EMAIL','$MOBILE','$PASSWORD')";

$result = mysqli_query($con,$query);

if($result)
{
  $showAlert = true;

 if($showAlert)
 {

  require '_nav.php';
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> Your account has been created and now you can login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }


 header("refresh:2, url=signup_login.php");
}
else
{
  require '_nav.php';
  echo '<script>
  alert("Something Went Wrong! Try With Email-ID which is not registered."); 
  </script>';
header("refresh:1, url=signup_login.php");
}
?>

<script src="Javascript/sweetalert.min.js"></script>


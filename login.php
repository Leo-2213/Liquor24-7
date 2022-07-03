<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo '<script>alert("Not Connected To Server");</script>';
}

if(!mysqli_select_db($con,'liquor_db'))
{
  echo '<script>alert("Database is not selected!");</script>'; 
}
        $EMAIL = $_POST['email'];
        $PASSWORD = $_POST['password'];

  $query = "SELECT Email,Password FROM userinfo where Email = '$EMAIL' && Password = '$PASSWORD'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);

if($count==1)
{
if(isset($EMAIL) && isset($PASSWORD)) 
{
  session_start();
  $query1=mysqli_query($con,"SELECT Name FROM userinfo where Email='$EMAIL'");
  $Name=mysqli_fetch_assoc($query1);
  $_SESSION['name']=implode($Name);
  $query2=mysqli_query($con,"SELECT CID FROM userinfo where Email='$EMAIL'");
  $Cid=mysqli_fetch_assoc($query2);
  $_SESSION['id']=implode($Cid);
}
header("refresh:1, url=home.php"); // Redirecting To Other Page
}
else
{
echo '<script>alert("Incorrect Email-Id or Password");</script>';
header("refresh:1, url=signup_login.php");
}

?>
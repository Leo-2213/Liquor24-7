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
?>
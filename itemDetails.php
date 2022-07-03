<?php
session_start();
require('_dbConnect.php');

$item=$_POST['itemName'];
$tmp=$_SESSION['id'];
$query="SELECT o.ItemName,o.Time,l.ItemType,l.ItemPrice FROM `order_details` as o, `liquor_info` as l WHERE  o.CID=$tmp && o.ItemName LIKE '$item%' && l.ItemName LIKE '$item%'";
$result=mysqli_query($con,$query);

if ($result->num_rows > 0) {
    // output data of each row
    $i=1;
    while($row = $result->fetch_assoc()) {
      echo "<hr>".$i.".<br>"."Item Name  :". $row["ItemName"]."<br>"."Item Type    :". $row["ItemType"]."<br>"."Item Price   :".$row["ItemPrice"]."<br>"."Ordered On:".$row["Time"]."<br>"."<hr>";
      $i++;
    }
}

?>

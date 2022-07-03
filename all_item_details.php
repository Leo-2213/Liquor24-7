<html>
<head>
    <style>
       
        .bg{
            background-image: url('images/orderDetails1.jpg');
            height: 100%; 
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
        
           }
}
    </style>
</head>
<body class="bg">
<?php
session_start();
require('_dbConnect.php');

$id=$_SESSION['id'];
$query="SELECT o.ItemName,o.Time,l.ItemType,l.ItemPrice FROM `order_details` as o, `liquor_info` as l WHERE o.CID =$id && o.ItemName =l.ItemName";
$result=mysqli_query($con,$query);

echo '<center><h1>Your Orders</h1></center>';
if ($result->num_rows > 0) {
    // output data of each row
    $i=1;
    while($row = $result->fetch_assoc()) {
      echo "<hr>".$i."<br>"."Item Name  :". $row["ItemName"]."<br>"."Item Type    :". $row["ItemType"]."<br>"."Item Price   :".$row["ItemPrice"]."<br>"."Ordered On:".$row["Time"]."<br>"."<hr>";
      $i++;
    }
}

?>
</body>
</html>
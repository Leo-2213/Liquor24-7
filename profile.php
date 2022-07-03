<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Profile</title>
    <style>
      .bg
      {
            background-image: url('images/login1.jpeg');
            height: 120%; 
            background-position: relative;
            background-repeat: no-repeat;
            background-size: cover;
            
      }
    </style>
  </head>
  <body class="bg">
    <?php
     /* $con = mysqli_connect('127.0.0.1','root','');
      if(!$con)
      {
      echo "Not Connected To Server";
      }
      
      if(!mysqli_select_db($con,'liquor_db'))
      {
        echo "Database is not selected!"; 
      }*/
      require('_dbConnect.php');
      $ID=$_SESSION['id'];
      $query1=mysqli_query($con,"SELECT Name FROM userinfo where CID=$ID");
      $Name=mysqli_fetch_assoc($query1);
     
      $query2=mysqli_query($con,"SELECT Email FROM userinfo where CID=$ID");
      $Email=mysqli_fetch_assoc($query2);
     
      $query2=mysqli_query($con,"SELECT Mobile FROM userinfo where CID=$ID");
      $Mobile=mysqli_fetch_assoc($query2);


    ?>
    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>
                            <?php 
                               echo implode($Name);
                            ?>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         <?php
                         echo implode($Name);
                         ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php
                         echo implode($Email);
                         ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php
                         echo implode($Mobile);
                         ?>
                        </div>
                        <hr>
                        <div class="col-sm-3">
                          <h6 class="mb-0">Orders</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         <?php
                          $sql = "SELECT ItemName,Time FROM order_details where CID=$ID";
                          $result = $con->query($sql);
                          if ($result->num_rows > 0) {
                          // output data of each row
                          $i=1;
                          while($row = $result->fetch_assoc()) {
                            echo $i." : ". $row["ItemName"]."<br>";
                            $i++;
                          }
                         }
                         else {
                          echo "Orders Not Found!";}
                         ?>
                         
                        </div>
                      </div>
                      <!--<hr>
                      <form action="itemDetails.php" method="post">
                           <h6 >Please Enter First Three Character of your Item from your Orders for more Details</h3>
                           <input type="text" name="itemName"></input>
                           <button type="submit">Go</button>
                      </form>-->
                      <hr>
                      <form action="all_item_details.php" method="post">
                      <center><h6>Click On Below Button to Know More About Your Orders</h6>
                           <button type="submit">Show Details</button></center>
                      </form>
                    </div>
                  </div>
                 </div>
              </div>
    
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

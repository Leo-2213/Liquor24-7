<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   session_destroy();
   header('Refresh: 2; URL = signup_login.php');
   require '_nav.php';
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" >
     <strong style="text-align:top">Success!</strong> You Have Been Logged Out!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   ?> 
   